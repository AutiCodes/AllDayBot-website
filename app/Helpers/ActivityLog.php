<?php

namespace App\Helpers;
use Request;
use App\Models\WebsiteActivityLog;
use Auth;


class ActivityLog
{
    public static function addToLog($subject) 
    {
        if (!Auth::check()) {
            $user = 'Geen';
        } else {
            $user = auth()->user()->name;
        }

        $log = [];
        $log['subject'] = $subject;
        $log['url'] =  Request::fullUrl();
        $log['method'] = Request::method();
        $log['IP'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['username'] = $user;
        WebsiteActivityLog::create($log);
    }



    public static function test()
    {
        return 'Jeej i do workie';
    }
}