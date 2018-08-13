<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Region extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug'
    ];
    public function departement(){
        return $this->hasMany('App\Departement');
    }
}
