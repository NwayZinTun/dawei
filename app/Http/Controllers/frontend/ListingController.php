<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Placetype;
use App\Listing;
use App\Place;
use App\ListingDetails;
use Auth;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Placetype::all();
        // $places_lists = Place::where('placetype_id',$id)->get();
        $listings = Listing::all();
        // dd($listings);die();
        return view('frontend.listings.index',compact('places','listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Placetype::all();
        return view('frontend.listings.listing_create',compact('places'));
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
            'name' => 'required|min:5|max:191',
            'photo' => 'required|mimes:jpeg,bmp,png'
        ]);
        
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName;

        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->photo = $filepath;
        $listing->day = $request->input('duration');
        $listing->user_id = Auth::id();
        // dd($listing);die();
        $listing->save();
        // dd($listing);die();
        // $listingdetails = new ListingDetails;
        // $listing_id = $listing->id;
        // dd($listing_id);die();

        //Return
        return redirect()->route('listings.index');
    }

    // public function store_details(Request $request)
    // {
    //     $listing = new ListingDetails;
    //     $listing->name = $request->input('name');
    //     $listing->photo = $filepath;
    //     $listing->day = $request->input('duration');
    //     $listing->user_id = Auth::id();
        
    //     // dd($listing);die();
    //     $listing->save();
    //     //Return
    //     return redirect()->route('listings.index');
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $lid = $id;
        $places = Place::all();
        $listing = Listing::find($id);
        // dd($listing);die();
        return view('frontend.listings.listing_details',compact('listing','places','lid'));
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
