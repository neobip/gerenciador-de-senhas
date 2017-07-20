<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Login as Authenticatable;

class Login extends Model {

    //
    protected $table = 'user';
    
    protected $fillable = [
        'name', 'email', 'senha',
    ];
    protected $hidden = [

        'senha',
    ];

}
