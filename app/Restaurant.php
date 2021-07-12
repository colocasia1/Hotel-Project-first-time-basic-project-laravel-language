<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable = [
        'category_id','food_name','description','price','img',
    ];

}
