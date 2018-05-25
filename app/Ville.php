<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = [
        'id',
        'name',
        'departement_id',
        'slug'
    ];
    public function region() {
        return $this->belongsTo('App\Departement');
    }
    //public function spots() {
        //return $this->hasMany('App\Spot');
    //}
}
