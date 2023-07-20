<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BotSetting;
use App\Helpers\ActivityLog;
use Auth;

class BotSettingsController extends Controller
{
    public function log()
    {
        return view('bot_settings.log', ['settings' => BotSetting::all()->first()]);
    }

    public function postLog(Request $request)
    {    
        $validated = $request->validate([
            'sw_message_edited' => 'max:1|nullable',
            'sw_message_deleted' => 'max:1|nullable',
            'sw_message_reaction' => 'max:1|nullable',
            'sw_vc_join_leave' => 'max:1|nullable',
            'sw_vc_change' => 'max:1|nullable',
            'sw_join_leave' => 'max:1|nullable',
            'sw_threads' => 'max:1|nullable',
            'sw_ban_unban' => 'max:1|nullable',
            'sw_nickname_change' => 'max:1|nullable',
        ]);
        
        ActivityLog::addToLog("Gebruiker heeft log functie gewijzigd");

        $setting = BotSetting::find(1);        
        $setting->sw_message_edited = $validated['sw_message_edited'];
        $setting->sw_message_deleted = $validated['sw_message_deleted'];
        $setting->sw_message_reaction = $validated['sw_message_reaction'];
        $setting->sw_vc_join_leave = $validated['sw_vc_join_leave'];
        $setting->sw_vc_change = $validated['sw_vc_change'];
        $setting->sw_join_leave = $validated['sw_join_leave'];
        $setting->sw_threads = $validated['sw_threads'];
        $setting->sw_ban_unban = $validated['sw_ban_unban'];
        $setting->sw_nickname_change = $validated['sw_nickname_change'];                                       
        $setting->save();

        return redirect('/instellingen/log');
    }

    public function xp()
    {
        return view('bot_settings.xp', ['data' => BotSetting::all()->first()]);
    }

    public function postXp(Request $request)
    {
        $validated = $request->validate([
            'xp_messages' => 'required|numeric',
            'xp_voicechat' => 'required|numeric'
        ]);

        ActivityLog::addToLog("Gebruiker heeft xp gewijzigd");

        $settings = BotSetting::find(1);
        $settings->xp_messages = $validated['xp_messages'];
        $settings->xp_voicechat = $validated['xp_voicechat'];
        $settings->save();

        return redirect('/instellingen-bot-xp');
    }
}
