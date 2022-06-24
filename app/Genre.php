<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];



    public function posts(){
        return $this->belongsToMany('App\Genre');
    }
}
