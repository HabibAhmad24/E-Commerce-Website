<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
        $catagory = Catagory::get();
        return view('admin.catagories.index',['catagories'=>$catagory]);
    }

    public function create()
    {
        return view('admin.catagories.create');
    }
    public function store(Request $request)
    {
        $request-> validate([
        'name' => 'required',
        'price' => 'required',
        'image'=>'required|mimes:png,jpg,jpeg,gif|max:10000000'
    ]);
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('admin/catagories'), $imageName);
    $catagory = new Catagory;
    $catagory->name =$request->name;
    $catagory->price = $request->price;
    $catagory->image=$imageName;
    $catagory->save();
    return redirect('admin/catagories/index')->with('success', 'Updated Successfully');
    }


    public function edit($id)
    {
        $catagory = Catagory::where('id',$id)->first();
        return view('admin.catagories.edit',['catagory'=>$catagory]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:10000000',
        ]);

        $catagory = Catagory::where('id',$id)->first(); // Use findOrFail to automatically handle the 404 error if the product doesn't exist.

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('admin/catagories'), $imageName);
            $catagory->image = $imageName;
        }

        $catagory->name = $request->name;
        $catagory->price = $request->price;

        $catagory->update();


        return redirect()->route('admin.catagories.index', $catagory->id)->with('success', 'Category updated successfully.');
 // Use 'with' to set a success message.
    }

    public function del($id)
    {
        $catagory = Catagory::where('id',$id)->first();
        $catagory->delete();
    return back()->withSuccess('delete Successfully');
}
}
