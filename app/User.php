<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'remember_token',

    ];

    public function post() {
        return $this->hasMany('App\Post');
    }
    public function ville() {
        return $this->hasMany('App\Ville');
    }
    public function spot() {
        return $this->hasMany('App\Spot');
    }
    public function voie() {
        return $this->hasMany('App\Voie');
    }
    public function isAdmin() {
        return $this->role === 'admin';
    }

}
