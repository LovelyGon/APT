<?php
namespace App\Http\Controllers;

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
            'popular' => 'required'
        ], [
            'internet.required' => 'Báº¡n pháº£i chá»�n internet',
            'parking.required' => 'Báº¡n pháº£i chá»�n parking',
            'breakfast.required' => 'Báº¡n pháº£i chá»�n breakfast',
            'children.required' => 'Báº¡n pháº£i chá»�n children',
            'pets.required' => 'Báº¡n pháº£i chá»�n pet',
            'languages.required' => 'Báº¡n pháº£i chá»�n language',
            'popular.required' => 'Báº¡n pháº£i chá»�n popular'
        ]);
        $Features = new Features();
        $Features->internet = $request->internet;
        $Features->parking = $request->parking;
        $Features->breakfast = $request->breakfast;
        $Features->children = $request->children;
        $Features->pet = $request->pets;
        $Features->language = implode(',', $request->languages);
        $Features->popular_facility = implode(',', $request->popular);
        $Features->property_id = $request->property_id;
        $Features->save();
        return Redirect('admin/apartments');
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
