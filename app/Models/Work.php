<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'work';

    protected $fillable = [
        'type', 'title', 'state', 'number', 'answer', 'left', 'done', 'start', 'end', 'content', 'money', 'earn', 'profit', 'all_profit',
    ];

    protected $hidden = [

    ];
}
