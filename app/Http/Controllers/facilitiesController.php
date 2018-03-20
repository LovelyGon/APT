<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
use App\facilities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class facilitiesController extends Controller
{
    public function index()       
    {
        $apartment =Apartment::limit(10)->get();
        return view('admin.facilities')->with('apartment', $apartment);
       
    }
    public function store(Request $rq)       
    {
        $facilities = new facilities();	
        $facilities->facility = json_encode($rq->all());
        $facilities->apartment_id = $rq->input('id');
        $facilities->save();
       
    }
}
