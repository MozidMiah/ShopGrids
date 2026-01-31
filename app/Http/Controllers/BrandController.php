<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Can;

class BrandController extends Controller{
    // showing index page
    public function index()
    {
        $brands = Brand::get();
        return view('admin.brand.index', compact('brands'));
    }

    // showing create page
    public function create()
    {
        return view('admin.brand.create');
    }

    // store the value
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageUrl = getImageUrl($request->image, 'uploads/images/');
        }

        Brand::create([
            'brand_name'        => $request->name,
            'brand_description' => $request->description,
            'status'            => $request->status,
            'brand_image'       => $imageUrl,
        ]);

        return redirect()->route('brand.index')
            ->with('message', 'Brand Created Successfully.');
    }



    // showing create page
    public function edit($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('admin.brand.edit', compact('brand'));
    }

    // store the value
    public function update(Request $request)
    {
        $brand = Brand::find($request->id);

            // $category = Category::where('id', $id)->first();
       

        if ($request->hasFile('image')) {
            $imageUrl = getImageUrl($request->brand_image, 'uploads/images/');
        }else{
             $imageUrl = $brand->brand_image; // keep old image by default

        }

        $update = $brand->update([
            'brand_name' => $request->name,
            'brand_description' => $request->description,
            'status' => $request->status,
            'brand_image' => $imageUrl,
        ]);

        if ($update) {
            return redirect()->route('brand.index')->with('message', 'Brand Updated Successfully.');
        } else {
            return back()->with('message', 'Brand update failed.');
        }
    }


    public function status($id)
    {
        $brand = Brand::where('id', $id)->first();
        if ($brand->status == 1) {
            $brand->update([
                'status' => 2,
            ]);
        } else {
            $brand->update([
                'status' => 1,
            ]);
        }

        if ($brand) {
            return redirect()->route('brand.index')->with('message', 'Brand update Successfully.');
        } else {
            return back()->with('message', 'Brand does not update.');
        }
    }

    public function delete($id)
    {
        $brand = Brand::where('id', $id)->delete();
        if ($brand) {
            return redirect()->route('brand.index')->with('message', 'Brand delete Successfully.');
        } else {
            return back()->with('message', 'Brand does not create.');
        }
    }
}
