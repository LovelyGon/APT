<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
use App\galleries;
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
 
         if($request->hasFile('image')) {
            $images = $request->file('image');
            $number = 0;
            foreach($images as $image){
                $imagename=time() . '_'.$number.'.'. $image->getClientOriginalExtension();
                $galleries = new galleries();
                $galleries->image_name=$imagename;
                $galleries->apartment_id=$request->input('galleries_id');
                $galleries->save();
                $image->move(public_path('upload_images'), $imagename);
                $number++;
            }
            return redirect()->route('galleries');
        } else {

           return response()->json('No');             
        }
       
    }
}
