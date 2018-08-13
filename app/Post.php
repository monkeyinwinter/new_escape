<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'text',
        'user_id',
        'spot_id',
    ];
    public function spot(){
        return $this->belongsTo('App\Spot');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
