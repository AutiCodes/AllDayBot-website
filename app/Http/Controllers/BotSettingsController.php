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
        return view('botSettings.log', ['settings' => BotSetting::all()->first()]);
    }

    

    public function postLog(Request $request)
    {   
        $validated = $request->validate([
            'swMessageEdited' => 'max:1|nullable',
            'swMessageDeleted' => 'max:1|nullable',
            'swMessageReaction' => 'max:1|nullable',
            'swVcJoinLeave' => 'max:1|nullable',
            'swVcChange' => 'max:1|nullable',
            'swJoinLeave' => 'max:1|nullable',
            'swThreads' => 'max:1|nullable',
            'swBanUnban' => 'max:1|nullable',
            'swNicknameChange' => 'max:1|nullable',
        ]);
        
        $user = Auth::user()->name;
        ActivityLog::addToLog('Gebruiker $user heeft log functie gewijzigd');

        $setting = BotSetting::find(1);
        $setting->messageEdited = $validated['swMessageEdited'];
        $setting->messageDeleted = $validated['swMessageDeleted'];
        $setting->messageReaction = $validated['swMessageReaction'];
        $setting->voiceJoinLeave = $validated['swVcJoinLeave'];
        $setting->voiceChange = $validated['swVcChange'];
        $setting->threads = $validated['swThreads'];
        $setting->modBanUnban = $validated['swBanUnban'];
        $setting->memberNickname = $validated['swNicknameChange'];                                       
        $setting->save();

        return redirect('/instellingen/log');
    }
    


    public function xp()
    {
        return view('botSettings.xp', ['data' => BotSetting::all()->first()]);
    }

    

    public function postXp(Request $request)
    {
        $validated = $request->validate([
            'xpMessages' => 'required|numeric',
            'xpVoicechat' => 'required|numeric'
        ]);

        $user = Auth::user()->name;
        ActivityLog::addToLog("Gebruiker $user heeft xp gewijzigd");

        $settings = BotSetting::find(1);
        $settings->xpMessages = $validated['xpMessages'];
        $settings->xpVoicechat = $validated['xpVoicechat'];
        $settings->save();

        return redirect('/instellingen-bot-xp');
    }
}
