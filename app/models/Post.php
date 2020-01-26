<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function Comments()
  {
    // 投稿はたくさんのコメントを持つ
    return $this->hasMany('Comment', 'post_id');
  }
  public function Category()
  {
    // 投稿は一つのカテゴリーに属する
    return $this->belongsTo('Category', 'cat_id');
  }
}
