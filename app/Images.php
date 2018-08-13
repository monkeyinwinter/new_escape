<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'voie_id',
        'filename',
    ];

    public function voie()
    {
        return $this->belongsTo('App\Voie');
    }
}
