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
    public function editAparrtment($id)       
    {
        $apartment = Apartment::find($id);
        return view('admin.apartments-update')->with('apartment', $apartment);
       
    }
    public function storeEditAparrtment($id,Request $request)       
    {
        $apartment = Apartment::where('id', '=', $id)->first();
        $apartment->apartment_type = $request->apartment_type;
        $apartment->apartment_name = $request->apartment_name;
        $apartment->apartment_custom_name = $request->custom_name;	
        $apartment->apartment_type_number = $request->number_of_apartment;
        $apartment->smoking_policy = $request->smoking_policy;
        $apartment->living_room_number =$request->number_of_livingroom;
        $apartment->bathroom_number =  $request->number_of_bathrooms;
        $apartment->bedroom_number = $request->number_of_bedrooms;
        $apartment->apartment_size = 22;
        $apartment->property_id = Auth::user()->id;
        $apartment->save();
        return redirect()->route('apartments');
       
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
        $apartment =Apartment::limit(10)->get();
        return response()->json($apartment); 
    }
}
