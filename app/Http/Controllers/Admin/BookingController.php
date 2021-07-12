<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        $reservations = Reservation::all();
        return view('backend.booking.index',compact('reservations'));
    }

    public function destroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('admin/booking/request')->with('status','Successfully you data is deleted move to trash.');
    }

    public function show(){
        $reservations = Reservation::onlyTrashed()->get();
        return view('backend.booking.trash',compact('reservations'));
    }

    public function restore($id){
        Reservation::onlyTrashed()->where('id',$id)->restore();
        return redirect('admin/on_trash')->with('status','Successfully you data is restore that move to original booking request page.');
    }

    public function forcedelete($id){
        Reservation::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect('admin/on_trash')->with('force','Successfully you data is deleted.');
    }
}
