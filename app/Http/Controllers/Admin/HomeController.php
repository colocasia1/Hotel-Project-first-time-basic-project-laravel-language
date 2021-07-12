<?php

namespace App\Http\Controllers\Admin;

use App\Homepost;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomePostsInsertFormrequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        return view('backend.homes.home');
    }

    public function store(HomePostsInsertFormrequest $request){

        $files=$request->file('file');
        $filename = uniqid().'_'.$files->getClientOriginalName();
        $files->move(public_path().'/homephotos/',$filename);

        Homepost::create([
           'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'imgs'=>$filename,
        ]);



        return redirect('admin/home/create')->with('status','Successfully Home Create Post.');
    }

}
