<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(Request $request)
{
    DB::table('categories')->insert([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $request->input('image'),
        'status' => $request->status,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return back()->with('message', 'Category Create Successfully.');
}

    public function manage(){
        return view('admin.category.manage');
    }
}
