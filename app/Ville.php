<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = [
        'id',
        'name',
        'region_departementale',
        'departement_number',
        'slug'
    ];
    public function departement() {
        return $this->belongsTo('App\Departement');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function spot() {
        return $this->hasMany('App\Spot');
    }

}
