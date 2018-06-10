<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyWork extends Model
{
    protected $table = 'my_work';

    protected $fillable = [
        'work_id', 'state', 'answer', 'submit',
    ];

    protected $hidden = [

    ];
}
