<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'kind_of_room',
        'guest_number',
        'sofa_bed_number',
        'bed_option ',
        'apartment_id ',
        'option'
    ];
    
    public function Apartment()
    {
        return $this->hasMany('App\Apartment');
    }
}
