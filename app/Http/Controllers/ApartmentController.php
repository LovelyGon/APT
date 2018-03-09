<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    public function index()       
    {
        return view('admin.apartments');
       
    }
    
    public function createAparrtment()       
    {
        return view('admin.apartments-create');
       
    }
    
     public function storeAparrtment(Request $rq)
    {
   
            $aparrtment = new Apartment();	
            $aparrtment->apartment_type = $rq->input('apartment_type');
            $aparrtment->apartment_name = $rq->input('apartment_name');
            $aparrtment->apartment_custom_name = $rq->input('custom_name');	
            $aparrtment->apartment_type_number = $rq->input('number_of_apartment');
            $aparrtment->smoking_policy = $rq->input('smoking_policy');
            $aparrtment->living_room_number =$rq->input('number_of_livingroom');
            $aparrtment->bathroom_number =  11;
            $aparrtment->bedroom_number = $rq->input('number_of_bedrooms');
            $aparrtment->apartment_size = 22;
            $aparrtment->property_id = Auth::user()->id;
            $aparrtment->save();    
  

    }
}
