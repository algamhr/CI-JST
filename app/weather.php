<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weather extends Model
{
    protected $table = 't_weather';
    protected $fillable =[
        'dteday',
        'temp',
        'hum',
        'windspeed',
        'weathersit',

    ];
}
