<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [        
        'property_name',
        'property_type',
        'star_rating',
        'property_number',
        'website',
        'contact_name',
        'address',
        'address_line2',
        'country',
        'city',
        'zipcode',
        'phonenumber',
        'property_size',
        'user_id'
    ];
    
    /**
     * Get the comments for the blog post.
     */
    public function images()
    {
        return $this->hasMany('App\PropertyGallery');
    }
    
    public function Apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
