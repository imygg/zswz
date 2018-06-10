<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'app';

    protected $fillable = [
        'option_name', 'option_value',
    ];

    protected $hidden = [
    	
    ];
}
