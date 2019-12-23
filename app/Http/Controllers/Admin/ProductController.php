<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addProduct(){
        $cat = DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        return view('admin.product.create',compact('cat','brand'));
    }

    public function getSubcategory($category_id){
        $subcat = DB::table('subcategories')->where('category_id',$category_id)->get();
        return json_encode($subcat);
    }

    public function storeProducts(Request $request){

//        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
        $data['product_code'] = $request->product_code;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_model'] = $request->product_model;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['selling_prize'] = $request->selling_prize;
        $data['product_details'] = $request->product_details;
        $data['video_link'] = $request->video_link;
        $data['status'] = 1;

        $product_image_one = $request->product_image_one;
        $product_image_two = $request->product_image_two;
        $product_image_three = $request->product_image_three;

        if($product_image_one && $product_image_two && $product_image_three) {
            $product_image_one_name = hexdec(uniqid()).'.'.$product_image_one->getClientOriginalExtension();
            Image::make($product_image_one)->resize(300,280)->save('public/backend/media/products/'.$product_image_one_name);
            $data['product_image_one'] = 'public/backend/media/products/'.$product_image_one_name;

            $product_image_two_name = hexdec(uniqid()).'.'.$product_image_two->getClientOriginalExtension();
            Image::make($product_image_two)->resize(300,280)->save('public/backend/media/products/'.$product_image_two_name);
            $data['product_image_two'] = 'public/backend/media/products/'.$product_image_two_name;

            $product_image_three_name = hexdec(uniqid()).'.'.$product_image_three->getClientOriginalExtension();
            Image::make($product_image_three)->resize(300,280)->save('public/backend/media/products/'.$product_image_three_name);
            $data['product_image_three'] = 'public/backend/media/products/'.$product_image_three_name;

            DB::table('products')->insert($data);
            $notification = array(
                'messege' => 'Product Inserted Successful',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }


    public function getProducts(){
        $product = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->get();

        return view('admin.product.show',compact('product'));
    }

    public function viewSingleProduct($id){
        $single = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('subcategories','products.subcategory_id','subcategories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','subcategories.sub_category_name','brands.brand_name')
                    ->where('products.id',$id)
                    ->first();

        return view('admin.product.view_single',compact('single'));
    }

    public function InactiveNow($id){
        DB::table('products')->where('id',$id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Product Inactivated',
            'alert-type' => 'warning'
        );
            return Redirect()->back()->with($notification);
    }

    public function ActiveNow($id){
        DB::table('products')->where('id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Product Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteProduct($id){
        $data = DB::table('products')->where('id',$id)->first();
        $product_image_one = $data->product_image_one;
        $product_image_two = $data->product_image_two;
        $product_image_three = $data->product_image_three;
        unlink($product_image_one);
        unlink($product_image_two);
        unlink($product_image_three);
        $product = DB::table('products')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Product Deleted',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function EditProduct($id){
        $product=DB::table('products')->where('id',$id)->first();
        return view('admin.product.edit',compact('product'));
    }

    public function UpdateProductWithoutPhoto(Request $request,$id)
    {
        $data=array();
        $data['product_name']=$request->product_name;
        $data['product_slug']=$request->product_slug;
        $data['product_code']=$request->product_code;
        $data['product_model']=$request->product_model;
        $data['product_quantity']=$request->product_quantity;
        $data['category_id']=$request->category_id;
        $data['discount_prize']=$request->discount_prize;
        $data['subcategory_id']=$request->subcategory_id;
        $data['brand_id']=$request->brand_id;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['selling_prize']=$request->selling_prize;
        $data['product_details']=$request->product_details;
        $data['video_link']=$request->video_link;

        $update=DB::table('products')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                'messege'=>'Successfully Product Updated ',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.product')->with($notification);

        }else{
            $notification=array(
                'messege'=>'Nothing To Updated ',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.product')->with($notification);
        }
    }

    public function UpdateProductPhoto(Request $request,$id)
    {
        $old_one=$request->old_one;
        $old_two=$request->old_two;
        $old_three=$request->old_three;

        $product_image_one=$request->product_image_one;
        $product_image_two=$request->product_image_two;
        $product_image_three=$request->product_image_three;
        $data=array();

        if($request->has('product_image_one')) {
            unlink($old_one);
            $product_image_one_name= hexdec(uniqid()).'.'.$product_image_one->getClientOriginalExtension();
            Image::make($product_image_one)->resize(300,300)->save('public/backend/media/products/'.$product_image_one_name);
            $data['product_image_one']='public/backend/media/products/'.$product_image_one_name;
            DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Image One Updated ',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.product')->with($notification);


        }if($request->has('product_image_two')) {
        unlink($old_two);
        $product_image_two_name= hexdec(uniqid()).'.'.$product_image_two->getClientOriginalExtension();
        Image::make($product_image_two)->resize(230,300)->save('public/backend/media/products/'.$product_image_two_name);
        $data['product_image_two']='public/backend/media/products/'.$product_image_two_name;
        DB::table('products')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Image Two Updated ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.product')->with($notification);
    }if($request->has('product_image_three')) {
        unlink($old_three);
        $product_image_three_name= hexdec(uniqid()).'.'.$product_image_three->getClientOriginalExtension();
        Image::make($product_image_three)->resize(230,300)->save('public/backend/media/products/'.$product_image_three_name);
        $data['product_image_three']='public/backend/media/products/'.$product_image_three_name;
        DB::table('products')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Image Three Updated ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.product')->with($notification);
    }if($request->has('product_image_one') && $request->has('product_image_two')){

        unlink($old_one);
        $product_image_one_name= hexdec(uniqid()).'.'.$product_image_one->getClientOriginalExtension();
        Image::make($product_image_one)->resize(230,300)->save('public/backend/media/products/'.$product_image_one_name);
        $data['product_image_one']='public/backend/media/product/'.$product_image_one_name;

        unlink($old_two);
        $product_image_two_name= hexdec(uniqid()).'.'.$product_image_two->getClientOriginalExtension();
        Image::make($product_image_two)->resize(230,300)->save('public/backend/media/products/'.$product_image_two_name);
        $data['image_two']='public/backend/media/product/'.$product_image_two_name;

        DB::table('products')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Image One and Two Updated ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.product')->with($notification);



    }if($request->has('product_image_one') && $request->has('product_image_two') && $request->has('product_image_three')){
        unlink($old_one);
        unlink($old_two);
        unlink($old_three);
        $product_image_one_name= hexdec(uniqid()).'.'.$product_image_one->getClientOriginalExtension();
        Image::make($product_image_one)->resize(230,300)->save('public/backend/media/products/'.$product_image_one_name);
        $data['product_image_one']='public/backend/media/products/'.$product_image_one_name;

        $product_image_two_name= hexdec(uniqid()).'.'.$product_image_two->getClientOriginalExtension();
        Image::make($product_image_two)->resize(230,300)->save('public/backend/media/products/'.$product_image_two_name);
        $data['product_image_two']='public/backend/media/products/'.$product_image_two_name;

        $product_image_three_name= hexdec(uniqid()).'.'.$product_image_three->getClientOriginalExtension();
        Image::make($product_image_three)->resize(230,300)->save('public/backend/media/products/'.$product_image_three_name);
        $data['product_image_three']='public/backend/media/products/'.$product_image_three_name;
        DB::table('products')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Image One and Two Updated ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.product')->with($notification);


    }
        return Redirect()->route('all.product');
    }

    public function backToProductList(){
        return Redirect()->route('all.product');
    }


}
