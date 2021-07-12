<?php

namespace App\Http\Controllers\Viewer;


use App\Homecarousels;
use App\Homepost;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingInsertFormRequest;
use App\OtherService;
use App\Reservation;
use App\Service;
use Illuminate\Http\Request;

class ViewerController extends Controller
{
    public function index(){

        $homeposts=Homepost::all();
         $homecarousels = Homecarousels::all();
         return view('home',compact('homeposts','homecarousels'));
    }


    public function about(){
        return view('about');
    }

}
