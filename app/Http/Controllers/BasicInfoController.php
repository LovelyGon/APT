<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Property;
use App\PropertyGallery;
use PragmaRX\Countries\Facade as Countries;
use Illuminate\Support\Facades\Auth;

class BasicInfoController extends Controller
{
    public function index()       
    {
        $basic_info = Property::where('user_id', '=', Auth::user()->id)->first();
        return view('admin.basic_info')->with('basic_info', $basic_info);
       
    }
    public function store(Request $rq)
    {  
        
        $basic_info = Property::where('user_id', '=', Auth::user()->id)->first();
        if($basic_info==null){
            $property = new Property;
            $property ->property_name = $rq->property_name;
            $property ->property_type = $rq->property_type;
            $property ->star_rating = $rq->star_rating;
            $property ->website = $rq->website;
            $property ->contact_name = $rq->contact_name;
            $property ->address = $rq->address;
            $property ->address_line2 = $rq->address_line2;
            $property ->country = $rq->country;
            $property ->city = $rq->city;
            $property ->zipcode = $rq->zipcode;
            $callingCode = $rq->callingCode;
            $phonenumber = $rq->phonenumber;
            $property ->phonenumber = $callingCode.' '. $phonenumber;
            $property ->city = $rq->city;
            $property ->user_id = Auth::user()->id;
            $property->save();


            $id = $property->id;

            $files = $rq->image;

            for($i=1;$i<count($files);$i++)
            {   
                $galary = new PropertyGallery();
                $filename = $files[$i]->getClientOriginalName();
                $images = time(). "_" . $filename;
                $destinationPath = public_path('images');
                $files[$i]->move($destinationPath, $images);
                $galary->property_id = $id;
                $galary->image_name= $images;
                $galary->save();
                return redirect()->route('getfeatures')->with('id', $id);
            }
        }else{
            
        }
    }

    public function get_calling_code (Request $rq)
    {
        $iso2 = strtoupper($rq->iso2);
        $results = Countries::where('cca2',$iso2);
        foreach($results as $result)
        {
            $result_callingCode = $result->callingCode;
        }       
        return Response($result_callingCode);
    }

    public function get_country (Request $rq)
    {
        $iso2 = strtoupper($rq->iso2);
        
        $results = Countries::where('cca2',$iso2);
        dd($results);
        foreach($results as $result)
        {
            $result_citys = $result->states;
        }
        $result_city_names = [];
        for($i=1;$i<count($result_citys);$i++)
        {
            $city_name = $result_citys[$i]['name'];
            array_push($result_city_names,$city_name);
        }  
        $view_select = view('admin.select')->with(['result_city_names'=>$result_city_names]);           
        return Response($view_select);
    }
    
}
