<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    protected $dates=[
      'published_at',
    ];
    public function category(){
      return $this->belongsTo('App\Models\postCategory');
    }
    public function user(){
        return $this ->belongsTo('App\Models\User');
    }

  

    public function postTags(){
        return $this -> belongsToMany('App\Models\post_tag','post_tag_rel','post_id','tag_id');
    }

}
