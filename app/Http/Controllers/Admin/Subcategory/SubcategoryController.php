<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Subcategory;
use Illuminate\Support\Facades\Validator;
use DB;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function subCategory(){
        $category = DB::table('categories')->get();
        $subcate = DB::table('subcategories')
                    ->join('categories','subcategories.category_id','categories.id')
                    ->select('subcategories.*','categories.category_name')
                    ->get();
        return view('admin.subcategory.subcategory', compact('category','subcate'));
    }

    public function storeSubcategory(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'sub_category_name' => 'required|unique:subcategories|max:70',
            'sub_category_slug' => 'required|unique:subcategories|max:70',
        ]);

        $data = array();
        $data['category_id'] = $request -> category_id;
        $data['sub_category_name'] = $request -> sub_category_name;
        $data['sub_category_slug'] = $request -> sub_category_slug;
        DB::table('subcategories')->insert($data);

        $notification = array(
            'messege' => 'Sub-Category Inserted Successful',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deleteSubcategory($id){
        DB::table('subcategories')->where('id',$id)->delete();

        $notification = array(
            'messege' => 'Sub-Category Deleted Successful',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }

    public function editSubcategory($id){
        $subcat = DB::table('subcategories')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        return view('admin.subcategory.edit_subcategory',compact('subcat','category'));
    }

    public function updateSubcategory(Request $request, $id){
        $validatedData = $request->validate([
            'sub_category_name' => 'required|max:70',
            'sub_category_slug' => 'required|max:70',
            'category_id' => 'required',
        ]);

        $data = array();
        $data['sub_category_name'] = $request -> sub_category_name;
        $data['sub_category_slug'] = $request -> sub_category_slug;
        $data['category_id'] = $request -> category_id;

        $update = DB::table('subcategories')->where('id',$id)->update($data);

        if($update){
            $notification = array(
                'messege' => 'Sub-Category Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('sub.categories')->with($notification);
        }
        else{
            $notification = array(
                'messege' => 'Nothing To Update',
                'alert-type' => 'warning'
            );

            return Redirect()->route('sub.categories')->with($notification);
        }
    }
}
