<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Place;
use App\Placetype;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places=Place::all();
        return view('backend.places.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placetypes = Placetype::all();
        $places=Place::all();
        // dd($placetypes);
        return view('backend.places.create',compact('placetypes','places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|min:5|max:191'
        ]);

    //file upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName;

        $places = new Place;
        $places->name = $request->name;  
        $places->placetype_id=$request->placetype;
        $places->photo=$filepath;  
        $places->address=$request->address;
        $places->distance=$request->distance;
        $places->description=$request->description;       
        $places->save();

        return redirect()->route('places.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $places = Place::find($id);
        $placetypes = Placetype::all();
        return view('backend.places.edit',compact('places','placetypes'));
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
           $request->validate([
            'name' => 'required|min:5|max:191'
        ]);

    //file upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName;

        $places =Place::find($id);
        $places->name = $request->name;  
        $places->placetype_id=$request->placetype;
        $places->photo=$filepath;  
        $places->address=$request->address;
        $places->distance=$request->distance;
        $places->description=$request->description;       
        $places->save();

        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $places = Place::find($id);
        // dd($item);
        $places->delete();

        return redirect()->route('places.index');
    }
}