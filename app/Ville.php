<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = [
        'id',
        'name',
        'departement_id',
        'region_departementale',
        'departement_number',
        'slug'
    ];
    public function departement() {
        return $this->belongsTo('App\Departement');
    }
    public function spot() {
        return $this->hasMany('App\Spot');
    }

}
