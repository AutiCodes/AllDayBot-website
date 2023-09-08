<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiscordAuth extends Model
{
    use HasFactory;

    public function checkEmail($email) 
    {
        return DB::table('users')->where('email', $email)->exists();
    }

    public function checkIfMailIsAuth($email) 
    {
        return DB::table('discord_auth')->where('email', $email)->exists();
    }
}
