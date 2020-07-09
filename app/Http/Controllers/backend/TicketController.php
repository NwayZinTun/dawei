<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ticket;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $tickets=Ticket::all();
        return view('backend.tickets.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tickets.create');
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
         //file upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName;


        $tickets = new Ticket;
        $tickets->name = $request->name;
        $tickets->photo=$filepath;
        $tickets->email=$request->email;
        $tickets->address=$request->address;     
        $tickets->save();

        //Return
        return redirect()->route('tickets.index');
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
        $tickets=Ticket::find($id);
        return view('backend.tickets.edit',compact('tickets'));
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


        $tickets =Ticket::find($id);
        $tickets->name = $request->name;
        $tickets->photo=$filepath;
        $tickets->email=$request->email;
        $tickets->address=$request->address;     
        $tickets->save();

        //Return
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets = Ticket::find($id);
        $tickets->delete();

        return redirect()->route('tickets.index');
    }
}