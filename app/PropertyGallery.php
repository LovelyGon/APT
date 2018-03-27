<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyGallery extends Model
{
    protected $table = 'property_galleries';
    protected $fillable = [
        'image_name',
		'property_id'
		
    ];
    
    
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
