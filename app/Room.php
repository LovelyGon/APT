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
        'number_of_beds ',
        'apartment_id '
    ];
    
    public function Apartment()
    {
        return $this->hasMany('App\Apartment');
    }
}
