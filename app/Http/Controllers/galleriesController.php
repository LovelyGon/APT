<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
use App\PropertyGallery;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleriesController extends Controller
{
     public function index()       
    {
        $apartment =Apartment::limit(10)->get();
        return view('admin.galleries')->with('apartment', $apartment);
       
    }
    public function store(Request $request)       
    {
//        $galleries = new PropertyGallery();
//        $galleries ->property_id = $request->id;
 
        dd($request->file('image'));
       
    }
}
