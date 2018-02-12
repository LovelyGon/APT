<?php

namespace App\Http\Controllers;
use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    public function createAparrtment()       
    {
        return view('admin.apartments-create');
       
    }
    
     public function storeAparrtment(Request $rq)
    {
        $aparrtment= new Apartment;
        $aparrtment ->apartment_type = $rq->apartment_type;
        $aparrtment ->apartment_name = $rq->apartment__name;
        $aparrtment ->apartment_custom_name = $rq->custom_name;
        $aparrtment ->apartment_type_number = $rq->number_of_apartment;
        $aparrtment ->smoking_policy = $rq->smoking_policy;
        $aparrtment ->living_room_number = $rq->number_of_livingroom;
        $aparrtment ->bathroom_number = $rq->number_of_bathrooms;
        $aparrtment ->bedroom_number = $rq->number_of_bedrooms;
        $aparrtment ->apartment_size = 111;
        $aparrtment ->property_id = Auth::user()->id;
        $aparrtment->save();
        dd($aparrtment->id);
    }
}
