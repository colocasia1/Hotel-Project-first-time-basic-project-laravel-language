<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepost extends Model
{
    protected $fillable =[
        'title',
        'description',
        'imgs',
    ];
}
