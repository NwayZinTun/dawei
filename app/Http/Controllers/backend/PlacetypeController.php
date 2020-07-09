<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Placetype;
class PlacetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placetypes = Placetype::all();          
        return view('backend.placetypes.index',compact('placetypes') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.placetypes.create');
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

        $placetypes = new Placetype;
        $placetypes->name = $request->name;     
        $placetypes->save();

        //Return
        return redirect()->route('placetypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.placetypes.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $placetypes = Placetype::find($id);
       
        return view('backend.placetypes.edit',compact('placetypes'));
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

        $placetypes =  Placetype::find($id);
        $placetypes->name = $request->name;     
        $placetypes->save();

        //Return
        return redirect()->route('placetypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $placetypes = Placetype::find($id);
        $placetypes->delete();

        return redirect()->route('placetypes.index');
    }
}
