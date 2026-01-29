<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Can;

class CategoryController extends Controller
{
    // showing index page
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }

    // showing create page
    public function create()
    {
        return view('admin.category.create');
    }

    // store the value
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'image' => getImageUrl($request->file('image'),'upload/category-images/'),

        ]);
        if ($category) {
            return redirect()->route('category.index')->with('message', 'Category Create Successfully.');
        } else {
            return back()->with('message', 'Category does not create.');
        }
    }


     // showing create page
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    // store the value
    public function update(Request $request)
    {
        $category = Category::where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'image' => getImageUrl($request->file('image'),'upload/category-images/'),

        ]);
        if ($category) {
            return redirect()->route('category.index')->with('message', 'Category Create Successfully.');
        } else {
            return back()->with('message', 'Category does not create.');
        }
    }

    public function status($id){
         $category = Category::where('id',$id)->first();
         if($category->status == 1 ){
           $category->update([
            'status' => 2,
        ]);
         }
         else{
            $category->update([
            'status' => 1,
        ]);
         }
        
        if ($category) {
            return redirect()->route('category.index')->with('message', 'Category update Successfully.');
        } else {
            return back()->with('message', 'Category does not update.');
        }

    }

    public function delete($id)
    {
        $category = Category::where('id',$id)->delete();
         if ($category) {
            return redirect()->route('category.index')->with('message', 'Category delete Successfully.');
        } else {
            return back()->with('message', 'Category does not create.');
        }
    }
}
