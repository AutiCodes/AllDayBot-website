<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bot_settings_model;



class Bot_settings extends Controller
{
    


    public function log()
    {

        $model = new Bot_settings_model;

        return view("bot_settings.log", ["settings" => $model->get_all_settings()]);

    }

    

    public function post_log(Request $request)
    {   

        $validated = $request->validate([
            "sw_message_edited" => "sometimes|nullable|max:1",
            "sw_message_deleted" => "sometimes|nullable|max:1",
            "sw_message_reaction" => "max:1|nullable",
            "sw_vc_join_leave" => "max:1|nullable",
            "sw_vc_change" => "max:1|nullable",
            "sw_join_leave" => "max:1|nullable",
            "sw_threads" => "max:1|nullable",
            "sw_ban_unban" => "max:1|nullable",
            "sw_nickname_change" => "max:1|nullable",

        ]);
        
        $message_edited = $validated["sw_message_edited"];
        $message_deleted = $validated["sw_message_deleted"];
        $message_reaction = $validated["sw_message_reaction"];
        $voice_join_leave = $validated["sw_vc_join_leave"];
        $voice_change = $validated["sw_vc_change"];
        $member_join_leave = $validated["sw_join_leave"];
        $threads = $validated["sw_threads"];
        $mod_ban_unban = $validated["sw_ban_unban"];
        $member_nickname = $validated["sw_nickname_change"];

        $model = new Bot_settings_model;
        $model->insert_settings_log($message_edited, $message_deleted, $message_reaction, $voice_join_leave, $voice_change, $member_join_leave, $threads, $mod_ban_unban, $member_nickname);

        return redirect("/instellingen/log");

    }
    


    public function xp()
    {

        $model = new Bot_settings_model;

        return view("bot_settings.xp", ["data" => $model->get_xp()]);

    }

    

    public function post_xp(Request $request)
    {
        
        $model = new Bot_settings_model;
        $xp = $request->validate([
            "xp_messages" => "required|numeric",
            "xp_voicechat" => "required|numeric"
        ]);

        $model->set_xp($xp["xp_messages"], $xp["xp_voicechat"]);

        return redirect("/instellingen-bot-xp");
    
    }
    
}
