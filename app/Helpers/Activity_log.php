<?php

namespace App\Helpers;
use Request;
use App\Models\Website_activity_log;
use Auth;



class Activity_log
{
    public static function add_to_log($subject) 
    {

        if (!Auth::check()) {
            $user = "Geen";
        } else {
            $user = auth()->user()->name;
        }

        $log = [];
        $log["subject"] = $subject;
        $log["url"] =  Request::fullUrl();
        $log["method"] = Request::method();
        $log["IP"] = Request::ip();
        $log["agent"] = Request::header("user-agent");
        $log["username"] = $user;
        Website_activity_log::create($log);
        
    }


    public static function test()
    {
        return "Jeej i do workie";
    }

}