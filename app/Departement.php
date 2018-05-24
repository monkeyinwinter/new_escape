<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'id',
        'name',
        'departement_number',
        'region_id',
        'slug'
    ];
}
