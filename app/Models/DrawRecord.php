<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrawRecord extends Model
{
    protected $table = 'draw_record';

    protected $fillable = [
        'user_id', 'draw', 'state', 'money', 'way',
    ];

    protected $hidden = [

    ];
}
