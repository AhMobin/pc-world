<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Brand;
use Illuminate\Support\Facades\Validator;
use DB;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function brand(){
        $brand = Brand::all();
        return view('admin.brand.brands', compact('brand'));
    }

    public function storeBrand(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|max:55',
            'brand_logo' => 'required|max:70',
        ]);

        $data = array();
        $data['brand_name'] = $request->brand_name;
        $image = $request->file('brand_logo');
        if($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/backend/media/brands/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['brand_logo'] = $imageURL;
            $brand = DB::table('brands')->insert($data);

            $notification = array(
                'messege' => 'Brand Inserted Successful',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);

        }else{
            $brand = DB::table('brands')->insert($data);
            $notification = array(
                'messege' => 'Brand Inserted Successful',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function deleteBrand($id){
        $data = DB::table('brands')->where('id',$id)->first();
        $image = $data->brand_logo;
        unlink($image);
        $brand = DB::table('brands')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Brand Deleted Successful',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function editBrand($id){
        $brand = DB::table('brands')->where('id',$id)->first();
        return view('admin.brand.edit_brand',compact('brand'));

    }

    public function updateBrand(Request $request, $id){
        $validatedData = $request->validate([
            'brand_name' => 'required|max:55',
        ]);

        $oldLogo = $request->prev_logo;
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $image = $request->file('brand_logo');
        if($image) {
            unlink($oldLogo);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/backend/media/brands/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['brand_logo'] = $imageURL;
            $brand = DB::table('brands')->where('id',$id)->update($data);

            $notification = array(
                'messege' => 'Brand Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('brands')->with($notification);

        }else{
            $brand = DB::table('brands')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Brand Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('brands')->with($notification);
        }
    }

}
