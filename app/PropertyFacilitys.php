<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFacilitys extends Model
{
    
    public $timestamp = false;
    protected $fillable = [
       'arival_from',
       'arival_to',
       'departure_from',
       'departure_to ',
       'internet ',
       'parking ',
       'breakfast ',
        'children ',
       'pet ',
       'language ',
        'popular_facility ',
       'property_id ',
   ];
}
