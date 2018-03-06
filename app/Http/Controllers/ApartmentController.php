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
        $aparrtment= new Apartment;
        $aparrtment ->apartment_type = $rq->apartment_type;
        $aparrtment ->apartment_name = $rq->apartment__name;
        $aparrtment ->apartment_custom_name = $rq->custom_name;
        $aparrtment ->apartment_type_number = $rq->number_of_apartment;
        $aparrtment ->smoking_policy = $rq->smoking_policy;
        $aparrtment ->living_room_number = $rq->number_of_livingroom;
        $aparrtment ->bathroom_number = $rq->number_of_bathrooms;
        $aparrtment ->bedroom_number = $rq->number_of_bedrooms;
        $aparrtment ->apartment_size = 22;
        $aparrtment ->property_id = Auth::user()->id;
        $aparrtment->save();
        $room= new Room;
        $room ->sofa_bed_number = json_encode($rq->bedroom_kind_of_beds);
        $room ->guest_number = json_encode($rq->guests_can_stay);
        $room ->number_of_beds = json_encode($rq->number_of_beds);
        $room ->kind_of_room = json_encode($rq->bedroom_kind_of_beds);
        $room ->apartment_id =$aparrtment->id;
        $room ->bed_option =$aparrtment->id;
        $room->save();
        return redirect()->route('apartments');
    }
}
