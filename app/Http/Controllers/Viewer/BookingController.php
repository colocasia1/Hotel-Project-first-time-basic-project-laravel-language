<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingInsertFormRequest;
use App\OtherService;
use App\Reservation;
use App\Service;
use App\Upload;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(4);
        $otherservices =OtherService::paginate(4);
        $uploads = Upload::all();
        return view('service',compact('services','otherservices','uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //return $id;
        $service = Service::find($id);
        return view('booking',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingInsertFormRequest $request,$id)
    {
        Service::find($id);
        Reservation::create([
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'room_type'=>$request->get('roomtype'),
            'room_price'=>$request->get('price'),
            'check_in'=>$request->get('checkin'),
            'check_out'=>$request->get('checkout'),
            'no_guest'=>$request->get('guest'),
            'message'=>$request->get('message'),
        ]);

        return redirect(action('Viewer\BookingController@create',$id))->with('status','Booking successfully and our hotel contact to you coming soon.');

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
        $services = Service::where('id',$id)->firstOrFail();
        $services->delete();
        return redirect('services')->with('status','Successfully service post move to trash temporatory.');
    }
}
