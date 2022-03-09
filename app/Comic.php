<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';
    protected $fillable = [
        'publishing_house',
        'comics',
        'series',
        'series',
        'description',
        'release',
        'available'
    ];
}
