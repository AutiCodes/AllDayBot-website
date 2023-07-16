<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bot_setting;
use App\Helpers\Activity_log;
use Auth;


class BotSettingsController extends Controller
{
    


    public function log()
    {

        return view("bot_settings.log", ["settings" => Bot_setting::all()[0]]);

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
        
        $user = Auth::user()->name;
        Activity_log::add_to_log("Gebruiker $user heeft log functie gewijzigd");

        $setting = Bot_setting::find(1);
        $setting->message_edited = $validated["sw_message_edited"];
        $setting->message_deleted = $validated["sw_message_deleted"];
        $setting->message_reaction = $validated["sw_message_reaction"];
        $setting->voice_join_leave = $validated["sw_vc_join_leave"];
        $setting->voice_change = $validated["sw_vc_change"];
        $setting->threads = $validated["sw_threads"];
        $setting->mod_ban_unban = $validated["sw_ban_unban"];
        $setting->member_nickname = $validated["sw_nickname_change"];                                       
        $setting->save();

        return redirect("/instellingen/log");

    }
    


    public function xp()
    {
        
        return view("bot_settings.xp", ["data" => Bot_setting::all()[0]]);

    }

    

    public function post_xp(Request $request)
    {
        
        $validated = $request->validate([
            "xp_messages" => "required|numeric",
            "xp_voicechat" => "required|numeric"
        ]);

        $user = Auth::user()->name;
        Activity_log::add_to_log("Gebruiker $user heeft xp gewijzigd");

        $settings = Bot_setting::find(1);
        $settings->xp_messages = $validated["xp_messages"];
        $settings->xp_voicechat = $validated["xp_voicechat"];
        $settings->save();

        return redirect("/instellingen-bot-xp");
    
    }
    
}
