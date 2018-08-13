<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
    ];
    public function spot(){
        return $this->hasMany('App\Spot');
    }
    public function post(){
        return $this->hasMany('App\Post');
    }
}
