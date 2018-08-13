<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'textPost',
        'title',

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

/*    public function spot(){
        return $this->belongsTo('App\Spot');
    }*/


}
