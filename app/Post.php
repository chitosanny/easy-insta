<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //===== ここから =====
  Public function user()
  {
    return $this->belongsTo('App\User');
  }
  //===== ここまでを追加 =====
    // ==========ここから追加する==========
  //hasMany設定
  public function likes()
  {
    return $this->hasMany('App\Like');
  }
  // ==========ここまで追加する==========
    // ==========ここから追加する==========
  Public function likedBy($user)
  {
    return Like::where('user_id', $user->id)->where('post_id', $this->id);
  }
  // ==========ここまで追加する==========
    // ==========ここから追加する==========
  //hasMany設定
  public function comments()
  {
    return $this->hasMany('App\Comment');
  }
  // ==========ここまで追加する==========
}