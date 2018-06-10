<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EarnRecord extends Model
{
    protected $table = 'earn_record';

    protected $fillable = [
        'time', 'type', 'work_id', 'money', ' explain',
    ];

    protected $hidden = [

    ];
}
