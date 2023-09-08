<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BotPower;

class BotPowerController extends Controller
{
    public function getPower()
    {
        return view('bot.power');
    }
}
