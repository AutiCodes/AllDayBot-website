<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteActivityLog;

class SystemController extends Controller
{
    public function systemLogs()
    {   
        return view('system.logs', ['logs' => WebsiteActivityLog::get()->sortByDesc('created_at')->take(14)]);
    }
}
