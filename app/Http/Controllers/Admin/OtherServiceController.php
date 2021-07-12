<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtherServiceInsertFormRequest;
use App\OtherService;
use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    public function create(){
        return view('backend.services.otherservice');
    }

    public function store(OtherServiceInsertFormRequest $request){
       $file = $request->file('imgs');
       $filename = uniqid().'_'.$file->getClientOriginalName();
       $file->move(public_path().'/service/',$filename);
       OtherService::create([
          'description'=>$request->get('description'),
          'imgs'=>$filename,
       ]);

       return redirect('admin/otherservice/create')->with('status','Successfully Other Service Insert into database.');
    }
}
