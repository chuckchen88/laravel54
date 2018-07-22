<?php

namespace App;

use App\Model;

class Post extends Model       //默认posts表
{
    //protected $table = "posts";

    //protected $guarded;//不可注入的字段

   // protected $fillable = ['title','content'];//可以注入数据字段

    //关联用户  模型关联
    public function user(){
        return $this->belongsTo('App\User');
    }
}
