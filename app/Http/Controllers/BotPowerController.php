<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BotPowerController extends Controller
{
    public function getPower()
    {
        return view('bot.power');
    }

    public function getAPIPowerState()
    {   
        $TOKEN = env('PTERODACTYL_TOKEN');

        $ch = curl_init('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/resources');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer $TOKEN"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $ptero = json_decode(curl_exec($ch), true);

        switch ($ptero['attributes']['current_state']) {

            case 'running':
                $botUptime = "Online";
                break;
            case 'starting':
                $botUptime = "Aan het starten";
                break;
            case 'offline':
                $botUptime = "Offline";
                break;
            default:
                $botUptime = $ptero['attributes']['current_state'];
        }   

        return $botUptime;
    }

    public function postPowerButton(Request $request)
    {
        $TOKEN = env('PTERODACTYL_TOKEN');

        $ch = curl_init('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/power');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer $TOKEN"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        switch ($request->input('button_option')) {
            case 'start':
                curl_setopt($ch, CURLOPT_POSTFIELDS, '{"signal": "start"}');
                break;
            case 'stop':
                curl_setopt($ch, CURLOPT_POSTFIELDS, '{"signal": "kill"}');
                break;
            case 'restart':
                curl_setopt($ch, CURLOPT_POSTFIELDS, '{"signal": "restart"}');
                break;
            } 
            
        $res = curl_exec($ch);
        return redirect('bot/power');

    }

    public function getResources()
    {
        $TOKEN = env('PTERODACTYL_TOKEN');

        $ch = curl_init('https://bothostmanager.kelvincodes.nl/api/client/servers/6cfbb9d3/resources');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer $TOKEN"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch));
        
        return view('bot.resources', ['data' => $res->attributes->resources]);
    }
}
