<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
    public function home_stats()
    {
        return DB::table("analytics")->get()[0];
    }
}
