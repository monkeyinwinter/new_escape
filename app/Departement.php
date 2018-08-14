<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'id',
        'name',
        'departement_number',
        'slug'
    ];
    public function region() {
        return $this->belongsTo('App\Region');
    }
    public function villes() {
        return $this->hasMany('App\Ville');
    }
}
