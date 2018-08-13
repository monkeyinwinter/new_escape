<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voie extends Model
{
  protected $fillable = [
    'id',
    'name',
    'spot_id',
    'slug',
    'quotation_voies',
    'descriptif',
    'longueur_corde_conseillees',
    'nbre_degaines_conseillees',
    'quotation_plaisir',
    'imgVoie',
  ];
  public function spot() {
      return $this->belongsTo('App\Spot');
  }

}
