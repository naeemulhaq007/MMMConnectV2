<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $attributes = [
        'first_name' => '',
        'last_name' => '',
        'username' => '',
        'email' => '',
        'password' => '',
        'profile_pic' => '',
        'user_closed' => false
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'profile_pic',
        'user_closed'
    ];

}
