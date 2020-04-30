<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title','content','date_written','image',
        'user_id','type_id'
    ];
    public function users(){
        return $this->hasOne(User::class);
    }

    public function types(){
        return $this->hasOne(Type::class);
    }
}
