<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class System extends Model
{

    use HasFactory;



    public function get_system_logs()
    {

        return DB::select("SELECT * FROM website_activity_logs ORDER BY created_at DESC LIMIT 10");

    }

}
