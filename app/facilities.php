<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'id',
        'facility',
        'apartment_id',
    ];
}
