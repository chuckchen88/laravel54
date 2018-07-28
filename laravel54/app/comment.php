<?php

namespace App;

use App\Model;

class comment extends Model
{
    //所属关联
    public function post(){
        return $this->belongsTo('App\Post');
    }
    //所属用户关联
    public function user(){
        return $this->belongsTo('App\User');
    }
}
