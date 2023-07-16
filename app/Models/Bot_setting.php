<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Bot_setting extends Model
{
    use HasFactory;


    public function get_all_settings() 
    {

        return DB::table("bot_settings")->get()[0];

    }



    public function insert_settings_log($message_edited, $message_deleted, $message_reaction, $voice_join_leave, $voice_change, $member_join_leave, $threads, $mod_ban_unban, $member_nickname) 
    {
        
        DB::insert("UPDATE bot_settings SET message_edited=$message_edited, message_deleted=$message_deleted, 
        message_reaction=$message_reaction, voice_join_leave=$voice_join_leave, voice_change=$voice_change, 
        member_join_leave=$member_join_leave, threads=$threads, mod_ban_unban=$mod_ban_unban, member_nickname=$member_nickname");

    }


    
    public function get_xp() 
    {

        return DB::select("SELECT xp_messages, xp_voicechat FROM bot_settings")[0];

    }



    public function set_xp($xp_messages, $xp_voicechat) 
    {

        DB::update("UPDATE bot_settings SET xp_messages=$xp_messages, xp_voicechat=$xp_voicechat");
        
    }
}
