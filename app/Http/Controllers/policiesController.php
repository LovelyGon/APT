<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Property;
use App\Features;
use App\Apartment;
use App\PropertyGallery;
use PragmaRX\Countries\Facade as Countries;
use Illuminate\Support\Facades\Auth;

class policiesController extends Controller
{
    public function index()       
    {
        $policies = Property::where('user_id', '=', Auth::user()->id)->first();
        $propertyGallery = PropertyGallery::where('property_id', '=',$policies->id)->get();
        $features = Features::where('property_id', '=', Auth::user()->id)->first();
        $apartment =Apartment::limit(10)->get();
        return view('admin.policies')->with(['policies'=>$policies,'features'=>$features,'apartment'=>$apartment,'propertyGallery'=>$propertyGallery]);
       
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
