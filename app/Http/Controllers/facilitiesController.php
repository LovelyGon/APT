<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class facilitiesController extends Controller
{
    public function index()       
    {
        $apartment =Apartment::limit(10)->get();
        return view('admin.facilities')->with('apartment', $apartment);
       
    }
}
