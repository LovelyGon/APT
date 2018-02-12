<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'apartment_type',
        'apartment_name',
        'apartment_custom_name',
        'apartment_type_number ',
        'smoking_policy ',
        'living_room_number ',
        'bathroom_number ',
        'bedroom_number ',
        'apartment_size ',
        'property_id '
    ];
    public function Property()
    {
        return $this->belongsTo('App\Property');
    }
    
    public function Room()
    {
        return $this->hasMany('App\Room');
    }
}
