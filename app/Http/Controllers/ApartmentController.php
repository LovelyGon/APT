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
        $apartment =Apartment::limit(10)->get();
        return view('admin.apartments')->with('apartment', $apartment);
       
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
            $aparrtment->bathroom_number =  $rq->input('number_of_bathrooms');;
            $aparrtment->bedroom_number = $rq->input('number_of_bedrooms');
            $aparrtment->apartment_size = 22;
            $aparrtment->property_id = Auth::user()->id;
            $aparrtment->save(); 
            $id=$aparrtment->id;
            return response()->json($id);
    }
    public function storeBedroomAparrtment(Request $rq)
    {
        $living = $rq->input('living');
        $bedroom = $rq->input('bedroom');
        $guests_can_stay = $rq->input('guests_can_stay');
        $private_room = $rq->input('private_room');
        for ($i=0;$i<count($living);$i++) {
            $Room = new Room();
            $Room ->kind_of_room = $bedroom[$i];
            $Room ->guest_number = $living[$i];
            $Room ->sofa_bed_number = $guests_can_stay;
            $Room ->bed_option = $private_room;
            $Room ->option = 'bedrooom';
            $Room ->apartment_id = $rq->input('room_id');
            $Room ->save();   
        }
    }
    public function storeAparrtmentLiving(Request $rq)
    {
        $living = $rq->input('living');
        $bedroom = $rq->input('bedroom');
        for ($i=0;$i<count($living);$i++) {
            $Room = new Room();
            $Room ->kind_of_room = $bedroom[$i];
            $Room ->guest_number = $living[$i];
            $Room ->option = 'living';
            $Room ->apartment_id = $rq->input('room_id');
            $Room ->save();   
        }
    }
    public function delete(Request $rq)
    {
  
          $Room= Room::where('apartment_id', $rq->input('id'))->get();
          foreach ($Room as $Rooms){
            $Room1 = Room::findOrFail($Rooms->id);
            $Room1->delete();
          }
          $aparrtment = Apartment::findOrFail( $rq->input('id'));
          $aparrtment->delete();
         return response()->json($rq->input('room_id')); 
        }
}
