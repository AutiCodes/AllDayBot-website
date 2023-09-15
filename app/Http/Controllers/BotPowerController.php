<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Exception;

class BotPowerController extends Controller
{
    public function getPower()
    {
        return view('bot.power');
    }


      
    public function getAPIPowerState() 
    {
      static $powerStates = [
        'running' => 'Online',
        'starting' => 'Aan het starten',
        'offline' => 'Offline',
        'stopping' => 'Aan het stoppen',
      ];

      $ptero = Cache::get('powerState');

      $resp = Http::withOptions([
        'debug' => fopen('php://stderr', 'w')
      ])
      ->withHeaders([
        'Content-Type' => 'application/json',
      ])
      ->withToken(env('PTERODACTYL_TOKEN'))
      ->get('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/resources');
    
      $ptero = $resp->throw()->json();

      if(!$ptero) {
        try {
          return $ptero;
        } catch(Exception $e) {
          $ptero = [
            'attributes' => [
              'current_state' => 'unknown'
            ]
          ];
        } finally {
          Cache::put('powerState', $ptero, $seconds = 2);
        }
      }
    
      if(!array_key_exists($ptero['attributes']['current_state'], $powerStates)) return 'Unknown';
      return $powerStates[$ptero['attributes']['current_state']];

    }

    public function postPowerButton(Request $request)
    {
        switch ($request->input('button_option')) {
          case 'start':
              $signal = 'start';
              break;
          case 'stop':
              $signal = 'kill';
              break;
          case 'restart':
              $signal = 'restart';
              break;
        }

        Http::withToken(env('PTERODACTYL_TOKEN'))->withHeaders([
          'Content-Type: application/json'
        ])->post('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/power', ['signal' => $signal]);

        return redirect('bot/power');
    }

    public function getResources()
    {
        $resp = Cache::get('getResources');

        if (!$resp) {
            $resp = Http::withOptions([
              'debug' => fopen('php://stderr', 'w')
            ])->withToken(env('PTERODACTYL_TOKEN'))->withHeaders([
              'Content-Type' => 'application/json'
            ])->get('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/resources')->throw()->json();

            Cache::put('getResources', $resp, 10);
        } 

        return view('bot.resources', ['data' => $resp['attributes']['resources']]);
    }
}
