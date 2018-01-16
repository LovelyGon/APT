<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropertyFacilitys;

class featuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.features');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
        $PropertyFacilitys = new PropertyFacilitys;
        $PropertyFacilitys->internet=$request->internet;
        $PropertyFacilitys->parking=$request->parking;
        $PropertyFacilitys->breakfast=$request->breakfast;
        $PropertyFacilitys->children=$request->children;
        $PropertyFacilitys->pet=$request->pets;
        $PropertyFacilitys->language=implode(',',$request->languages);
        $PropertyFacilitys->popular_facility=implode(',',$request->popular);
        $PropertyFacilitys->property_id=1;
        $PropertyFacilitys->save();
        return redirect()->route('getfeatures')->withSuccess('Category has been created.');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
