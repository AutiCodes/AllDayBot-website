<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Bot_setting extends Model
{
    
    use HasFactory;



    public $timestamps = false;

    protected $fillable = [
        "message_edited",
        "message_deleted",
        "message_reaction",
        "voice_join_leave",
        "voice_change",
        "member_join_leave",
        "threads",
        "mod_ban_unban",
        "member_nickname",
        "xp_messages",
        "xp_voicechat",                                                                
    ];

}
