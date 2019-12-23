<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\Validator;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){
        $category = Category::all();

        return view('Admin.Category.category', compact('category'));
    }

    public function storeCategory(Request $request){
        $validatedData = $request->validate([
           'category_name' => 'required|unique:categories|max:55',
           'category_slug' => 'required|unique:categories|max:70',
        ]);

        //query builder
//        $data = array();
//        $data['category_name'] = $request->category_name;
//        $data['category_slug'] = $request->category_slug;
//        DB::table('categories')->insert($data);

        //Eloquent ORM
        $category = new Category();
        $category -> category_name = $request->category_name;
        $category -> category_slug = $request->category_slug;
        $category -> save();

        $notification = array(
          'messege' => 'Category Inserted Successful',
          'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function deleteCategory($id){
        DB::table('categories')->where('id',$id)->delete();

        $notification = array(
            'messege' => 'Category Deleted Successful',
            'alert-type' => 'warning'
        );

        return Redirect()->back()->with($notification);
    }

    public function editCategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $validatedData = $request->validate([
            'category_name' => 'required|max:55',
            'category_slug' => 'required|max:70',
        ]);

        $data = array();
        $data['category_name'] = $request -> category_name;
        $data['category_slug'] = $request -> category_slug;

        $update = DB::table('categories')->where('id',$id)->update($data);

        if($update){
            $notification = array(
                'messege' => 'Category Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('categories')->with($notification);
        }
        else{
            $notification = array(
                'messege' => 'Nothing To Update',
                'alert-type' => 'warning'
            );

            return Redirect()->route('categories')->with($notification);
        }
    }

}
