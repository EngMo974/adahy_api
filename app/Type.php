<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   protected $fillable = ['type'];

    public function posts(){
        return $this->belongsTo(Post::class);
    }

    public function stores(){
        return $this->belongsTo(Store::class);
    }

}
