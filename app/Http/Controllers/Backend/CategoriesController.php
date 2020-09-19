<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Image;

class CategoriesController extends Controller
{
    public function index()
    {
      $categories = Category::orderBy('id', 'desc')->get();
      return view('admin.pages.category.index')->with('categories', $categories);
 
    }

    public function create()
    {

      $main_categories = Category::orderBy('id', 'desc')->where('parent_id', NULL)->get();
      return view('admin.pages.category.create')->with('main_categories', $main_categories);
  
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
          'name' => 'required',
          'image' => 'nullable|image'
        ],
        [
          'name.required' => 'Please provie a category name',
          'image.image' => 'Please provie a valid .jpg, .jpeg .png extension image',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        //Insert image  
        if (count($request->image) > 0) {
              $image = $request->file('image');
              $img = time() . '.' . $image->getClientOriginalExtension();
              $location = public_path('uploaded_img/categories/' . $img);
              Image::make($image)->save($location);
              $category->image = $img;
        }
        $category->save();
        session()->flash('success', 'Category added successfully!');  
        return redirect()->route('category_list');
    }

    public function edit($id){
        $cat = Category::find($id);
        return view('admin.pages.category.edit')->with('cat', $cat);

    }








    public function delete($id){
        $category = Category::find($id);
        if (!is_null($category)) {
            $category->delete();
        }
        session()->flash('success','Category  has been deleted successfully');
        return back();

    }



}
