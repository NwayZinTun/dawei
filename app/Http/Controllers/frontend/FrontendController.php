<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Place;
use App\Placetype;
use App\Ticket;
use App\Listing;
use Auth;
class FrontendController extends Controller
{
    public function index()
    {
        $places = Placetype::all();
    	return view('frontend.index',compact('places'));
    }
     
    public function about_dawei()
    {
        $places = Placetype::all();
    	return view('frontend.mydawei',compact('places'));
    }

    public function about()
    {
        $places = Placetype::all();
        return view('frontend.about',compact('places'));
    }


    public function contact()
    {
        $places = Placetype::all();
    	return view('frontend.contact',compact('places'));
    }

    public function details($id)
    {
        $places = Placetype::all();
        $place_details = Place::find($id);
        // dd($place_details);die();
    	return view('frontend.details',compact('places','place_details'));
    }

    public function ticketshop()
    {
        $places = Placetype::all();
        $ticketshop = Ticket::all();
    	return view('frontend.ticketshop',compact('places','ticketshop'));
    }

    public function guide()
    {    $places = Placetype::all();
        $listings = Listing::all();
        return view('frontend.guide',compact('listings','places'));
    }
    public function places_lists($id)
    {
        $places = Placetype::all();
        $places_lists = Place::where('placetype_id',$id)->get();
        // dd($places_lists);die();
        return view('frontend.places_lists',compact('places_lists','places'));
    }

    // public function listing_create()
    // {
    //     $places = Placetype::all();
    //     return view('frontend.listing_create',compact('places'));
    // }

    // public function listing_store(Request $request)
    // {
    //     $places = Placetype::all();

    //     $imageName=time().'.'.$request->photo->extension();
    //     $request->photo->move(public_path('images'),$imageName);
    //     $filepath='images/'.$imageName;

    //     $listings = new Listing;
    //     $listings->name = $request->input('name');
    //     $listings->photo = $filepath;
    //     $listings->day = $request->input('duration');
    //     $listings->user_id = Auth::id();
        
    //     $listings->save();
    //     return view('frontend.listings',compact('places'));
    // }
   /* public function listings()
    {
        $places = Placetype::all();
        $listing = Listing::all();
        dd($listing);die();
        return view('frontend.',compact('places'));
    }*/

}
