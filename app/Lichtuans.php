<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lichtuans extends Model
{
  //restricts columns from modifying
  protected $guarded = [];

  // posts has many comments
  // returns all comments on that post
  public function comments()
  {
    return $this->hasMany('App\Comments', 'on_post');
  }

  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User', 'author_id');
  }
}
