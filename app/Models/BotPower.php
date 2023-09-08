<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotPower extends Model
{
    public function getStatus()
    {
        $TOKEN = env('PTERODACTYL_TOKEN');
        $ch = curl_init('https://bothostmanager.kelvincodes.nl/api/application/servers/2');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer $TOKEN"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        return json_decode(curl_exec($ch), true);

    }
}
