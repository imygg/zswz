<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckWork extends Model
{
    protected $table = 'check_work';

    protected $fillable = [
        'time', 'work_id', 'user_id', 'pic', 'txt', 'state', 'reply',
    ];

    protected $hidden = [

    ];
}
