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
       print_r(json_decode($rq));
    }
}
