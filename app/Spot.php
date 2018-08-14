<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
  protected $fillable = [
    'id',
    'name',
    'ville_id',
    'slug',
    'nombre_voies',
    'nombre_degaines',
    'expo_soleil',
    'temps_approche',
    'type_roche',
    'altitude',
    'longueur_corde',
    'nombre_secteur',
    'voies_4',
    'voies_5',
    'voies_6',
    'voies_7',
    'voies_8',
    'user_id',
  ];
    public function ville() {
      return $this->belongsTo('App\Ville');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function voie() {
      return $this->hasMany('App\Voie');
    }
    public function posts() {
        return $this->hasMany('App\Post');
    }

}
