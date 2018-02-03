<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Features;
use Illuminate\Http\Request;

class featuresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
            
    {
        $features = Features::where('property_id', '=', Auth::user()->id)->first();
        return view('admin.features')->with('features', $features);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $features = Features::where('property_id', '=', Auth::user()->id)->first();
       
        if($features==null){
            $this->validate($request, [
                'internets' => 'required',
                'parkings' => 'required',
                'breakfasts' => 'required',
                'childrens' => 'required',
                'petses' => 'required',
                'languages' => 'required',
                'populars' => 'required',
            ], [
                'internets.required' => 'Bạn phải chọn internet',
                'parkings.required' => 'Bạn phải chọn parking',
                'breakfastes.required' => 'Bạn phải chọn breakfast',
                'childrens.required' => 'Bạn phải chọn children',
                'petses.required' => 'Bạn phải chọn pet',
                'languages.required' => 'Bạn phải chọn language',
                'populars.required' => 'Bạn phải chọn popular',
            ]);
            $PropertyFacilitys = new Features;
            $PropertyFacilitys->internet=$request->internets;
            $PropertyFacilitys->parking=$request->parkings;
            $PropertyFacilitys->breakfast=$request->breakfasts;
            $PropertyFacilitys->children=$request->childrens;
            $PropertyFacilitys->pet=$request->petses;
            $PropertyFacilitys->language=implode(',',$request->languages);
            $PropertyFacilitys->popular_facility=implode(',',$request->populars);
            $PropertyFacilitys->property_id=Auth::user()->id;
            $PropertyFacilitys->save();
            return redirect()->route('getfeatures')->withSuccess('Category has been created.');
        }else{
            $this->validate($request, [
                'internet' => 'required',
                'parking' => 'required',
                'breakfast' => 'required',
                'children' => 'required',
                'pets' => 'required',
                'languages' => 'required',
                'popular' => 'required',
            ], [
                'internet.required' => 'Bạn phải chọn internet',
                'parking.required' => 'Bạn phải chọn parking',
                'breakfast.required' => 'Bạn phải chọn breakfast',
                'children.required' => 'Bạn phải chọn children',
                'pets.required' => 'Bạn phải chọn pet',
                'languages.required' => 'Bạn phải chọn language',
                'popular.required' => 'Bạn phải chọn popular',
            ]);
          
            $user = Features::where('property_id', '=', Auth::user()->id)->first();
            $user->internet=$request->internet;
            $user->parking=$request->parking;
            $user->breakfast=$request->breakfast;
            $user->children=$request->children;
            $user->pet=$request->pets;
            $user->language=implode(',',$request->languages);
            $user->popular_facility=implode(',',$request->popular);
            $user->property_id=Auth::user()->id;
            $user->save();
            return redirect()->route('getfeatures')->withSuccess('Category has been update.');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
