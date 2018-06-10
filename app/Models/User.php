<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'name', 'password', 'phone', 'avatar', 'register', 'last', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
