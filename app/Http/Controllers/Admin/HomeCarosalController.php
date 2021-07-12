<?php

namespace App\Http\Controllers\Admin;



use App\Homecarousels;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeCarosalInsertFormRequest;
use Illuminate\Http\Request;
use mysql_xdevapi\Table;

class HomeCarosalController extends Controller
{
    public function create(){
        return view('backend.homes.homecarosal');
    }

    public function store(HomeCarosalInsertFormRequest $request){
        $id = $request->input('id');
        $files = $request->file('file');
        $picture = array();

        if ($request->hasFile('file')):
            foreach ($files as $item):
                $name =uniqid().'_'.$item->getClientOriginalName();
                $item->move(public_path().'/homecarosal/',$name);
                $arr[] = $name;
            endforeach;
                $picture = implode('',$arr);
            else:
                $picture = '';
        endif;
       Homecarousels::create([
           'id'=>$id,
           'img'=>$picture,
       ]);
        return redirect('admin/home/carosal')->with('status','Successfully Insert Carosal Photos.');

        //$fileAry=[$files];
        //foreach ($files as $file){
            //$filename = uniqid().'_'.$file->getClientOriginalName();
            //$file->move(public_path().'/homecarosal/',$filename);
           // array_push($fileAry,$filename);
        //}

        //Homecarousels::create([
           // 'img'=>serialize($fileAry),
        //]);
         //return redirect('admin/home/carosal')->with('status','Successfully Insert Carosal Photos.');
    }
}
