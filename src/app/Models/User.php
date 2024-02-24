<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public function reservation(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function like() {
        return $this->hasMany('App\Models\Like');
    }
}
