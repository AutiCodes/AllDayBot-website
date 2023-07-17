<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteActivityLog;


class SystemController extends Controller
{
    public function systemLogs()
    {   
        return view('system.logs', ['logs' => WebsiteActivityLog::get()->take(12)->sortByDesc('created_at')]);
    }
}
