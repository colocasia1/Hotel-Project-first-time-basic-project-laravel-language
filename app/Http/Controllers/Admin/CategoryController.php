<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryInsertFormRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function create(){
        $categories = Category::all();
        return view('backend.category.create',compact('categories'));
    }

    public function store(CategoryInsertFormRequest $request){
        Category::create([
            'cat_name'=>$request->get('name'),
        ]);

        return redirect('admin/category/create')->with('status','Successfully Category insert into database.');
    }
}
