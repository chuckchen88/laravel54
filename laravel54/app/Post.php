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

    //关联评论
    public function comments(){
        return $this->hasMany('App\comment')->orderBy('created_at','desc');
    }

    //关联当前用户赞
    public function zan($user_id){
        return $this->hasOne(\App\Zan::class)->where('user_id',$user_id);
    }
    //关联所有赞
    public function zans(){
        return $this->hasMany(\App\Zan::class);
    }
}
