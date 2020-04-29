<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_name','description','address','type_id','user_id','store_name'
    ];
}
