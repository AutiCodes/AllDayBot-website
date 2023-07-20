<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BotSetting extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'sw_message_edited',
        'sw_message_deleted',
        'sw_message_reaction',
        'sw_vc_join_leave',
        'sw_vc_change',
        'sw_join_leave',
        'sw_threads',
        'sw_ban_unban',
        'sw_nickname_change',
        'xp_messages',
        'xp_voicechat',                                                                
    ];
}
