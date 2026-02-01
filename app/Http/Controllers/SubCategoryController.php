<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Can;

class SubCategoryController extends Controller
{
    // showing index page
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('admin.sub-category.index', compact('sub_categories'));
    }

    // showing create page
    public function create()
    {
        return view('admin.sub-category.create');
    }

    // store the value
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageUrl = getImageUrl($request->image, 'uploads/images/');
        }

        SubCategory::create([
            'name'        => $request->name,
            'description' => $request->description,
            'status'      => $request->status,
            'image'       => $imageUrl,
        ]);

        return redirect()->route('sub-category.index')
            ->with('message', 'Sub Category Created Successfully.');
    }



    // showing create page
    public function edit($id)
    {
        $sub_categories = SubCategory::where('id', $id)->first();
        return view('admin.sub-category.edit', compact('sub_categories'));
    }

    // store the value
    public function update(Request $request)
    {
        $sub_categories = SubCategory::find($request->id);
       

        if ($request->hasFile('image')) {
            $imageUrl = getImageUrl($request->image, 'uploads/images/');
        }else{
             $imageUrl = $sub_categories->image; // keep old image by default

        }

        $update = $sub_categories->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $imageUrl,
        ]);

        if ($update) {
            return redirect()->route('sub-category.index')->with('message', 'Sub Category Updated Successfully.');
        } else {
            return back()->with('message', 'Sub Category update failed.');
        }
    }


    public function status($id)
    {
        $sub_categories = SubCategory::where('id', $id)->first();
        if ($sub_categories->status == 1) {
            $sub_categories->update([
                'status' => 2,
            ]);
        } else {
            $sub_categories->update([
                'status' => 1,
            ]);
        }

        if ($sub_categories) {
            return redirect()->route('sub-category.index')->with('message', 'Sub Category update Successfully.');
        } else {
            return back()->with('message', 'Sub Category does not update.');
        }
    }

    public function delete($id)
    {
        $sub_categories = SubCategory::where('id', $id)->delete();
        if ($sub_categories) {
            return redirect()->route('sub-category.index')->with('message', 'Sub Category delete Successfully.');
        } else {
            return back()->with('message', 'Sub Category does not create.');
        }
    }
}
