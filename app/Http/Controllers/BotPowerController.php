<?php

namespace App\Http\Controllers;

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
}
