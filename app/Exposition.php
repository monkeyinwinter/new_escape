<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exposition extends Model
{
  protected $fillable = [
      'id',
      'name'
  ];
  public function spot(){
      return $this->hasMany('App\Spot');
  }
}
