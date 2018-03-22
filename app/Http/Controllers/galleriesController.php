<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
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
<<<<<<< HEAD
      
=======
        dd($request->all());
>>>>>>> 6e74703ec946d7ca845f510b95f664b3fe83075d
       
    }
}
