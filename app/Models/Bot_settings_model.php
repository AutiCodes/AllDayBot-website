<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Bot_settings_model extends Model
{
    use HasFactory;
    


    public function get_all_settings() {
        return DB::table("bot_settings")->get()[0];
    }



    public function insert_settings_log($message_edited, $message_deleted, $message_reaction, $voice_join_leave, $voice_change, $member_join_leave, $threads, $mod_ban_unban, $member_nickname) {
        
        DB::insert("UPDATE bot_settings SET message_edited=$message_edited, message_deleted=$message_deleted, 
        message_reaction=$message_reaction, voice_join_leave=$voice_join_leave, voice_change=$voice_change, 
        member_join_leave=$member_join_leave, threads=$threads, mod_ban_unban=$mod_ban_unban, member_nickname=$member_nickname");
    }
}
