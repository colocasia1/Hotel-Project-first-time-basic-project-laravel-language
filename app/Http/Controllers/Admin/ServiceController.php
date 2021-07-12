<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceInsertFormRequest;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('backend.services.service');
    }

    public function store(ServiceInsertFormRequest $request){
        //return $request->all();
        $file = $request->file('imgs');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/service/',$filename);

        Service::create([
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'imgs'=>$filename,
        ]);

        return redirect('admin/service/create')->with('status','Successfully service post insert into database.');
    }

    public function show(){
        $services = Service::onlyTrashed()->get();
        return view('backend.services.servicetrash',compact('services'));
    }

    public function restore($id){
        Service::onlyTrashed()->where('id',$id)->restore();
        return redirect('admin\on_trash_service')->with('status','Successfully Service Post Restore.');
    }

    public function forcedelete($id){
        $service=Service::onlyTrashed()->where('id',$id)->firstOrFail();
        $service->forceDelete();
        return redirect('admin\on_trash_service')->with('force','Successfully service post deleted.');
    }
}
