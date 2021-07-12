<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadInsertFormRequest;
use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function create(){
        return view('backend.services.vdupload');
    }

    public function store(UploadInsertFormRequest $request){
        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/videos/',$filename);

        Upload::create([
            'video'=>$filename,
        ]);
        return redirect(action('admin\UploadController@create'))->with('status','Successfully Video');
    }
}
