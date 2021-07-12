<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];//deleted_at is table column name;

    protected $fillable = [
        'name',
        'phone',
        'room_type',
        'room_price',
        'check_in',
        'check_out',
        'no_guest',
        'message',
    ];
}
