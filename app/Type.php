<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   protected $fillable = ['type'];

    public function posts(){
        return $this->hasOne(Post::class);
    }

    public function stores(){
        return $this->hasOne(Store::class);
    }

}
