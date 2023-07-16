<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Statistic extends Model
{
    public function get_channel_statistics()
    {

        $res = DB::select("SELECT textchannel_general, textchannel_memes, textchannel_nsfw, textchannel_tech_talk,
        textchannel_development_coding, textchannel_games_talk, textchannel_looking_for_party, textchannel_games_media FROM analytics
        ")[0];

        return $res;
    }  
}
