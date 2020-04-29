<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_name','description','address','type_id','user_id','store_name'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function types(){
        return $this->hasMany(Type::class);
    }
}
