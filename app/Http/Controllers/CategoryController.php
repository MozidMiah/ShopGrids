<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(Request $request){

        Category::newCategory($request);
        return back()->with('message', 'Category Create Successfully.');
    }

    public function manage(){
        return view('admin.category.manage', ['categories' =>Category::all()]);
    }
}
