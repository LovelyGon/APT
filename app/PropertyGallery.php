<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyGallery extends Model
{
    protected $fillable = [
        'image_name'
    ];
    
    
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
