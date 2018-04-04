<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'image_name',
        'apartment_id',
        'id',
    ];
}
