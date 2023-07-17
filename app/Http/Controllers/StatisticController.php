<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Statistic;


class StatisticController extends Controller
{
    public function channels()
    {
        return view('statistics.channels', ['channels' => Statistic::all()->first()]);
    }
}
