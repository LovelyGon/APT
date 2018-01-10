<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Countries;
use App\Galary;

class BasicInfoController extends Controller
{
    public function store(Request $rq)
    {  
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
        $callingCode = $rq->callingCode;
        $phonenumber =$rq->phonenumber;
        $property ->phonenumber = $callingCode.' '. $phonenumber;
        $property ->city = $rq->city;
        $property->save();
        $property_ids = Property::where('contact_name',$rq->contact_name)->get();
        foreach($property_ids as $property_id)
        {
            $id = $property_id->id;
        }   
        $files = $rq->image;
        for($i=1;$i<count($files);$i++)
        {   
            $galary = new Galary;
            $filename = $files[$i]->getClientOriginalName();
            $images = time(). "_" . $filename;
            $destinationPath = public_path('images');
            $files[$i]->move($destinationPath, $images);
            $galary->property_id = $id;
            $galary->name= $images;
            $galary->save();
        }
        return Redirect('admin/features');
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
