<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Cart;
use Auth;

class ProductController extends Controller
{
    public function ProductView($product_slug){
        $product = DB::table('products')
                    ->join('brands','products.brand_id','brands.id')
                    ->join('categories','products.category_id','categories.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->where('product_slug',$product_slug)
                    ->first();

        $pr_color = $product -> product_color;
        $color = explode(',',$pr_color);

        $pr_size = $product -> product_size;
        $size = explode(',',$pr_size);

        return view('pages.product_details',compact('product','color','size'));
    }

    public function productAddedCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        $data = array();
        if ($product->discount_prize == NULL) {
            $data['id'] = $id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->selling_prize;
            $data['weight'] = 1;
            $data['options']['code'] = $product->product_code;
            $data['options']['image'] = $product->product_image_one;
            $data['options']['color'] = $request->product_color;
            $data['options']['size'] = $request->product_size;

            Cart::add($data);

            $notification = array(
                'messege' => 'Successfully Added To Cart.',
                'alert-type' => 'success'
            );
            return redirect()->to('/')->with($notification);
        } else {
            $data['id'] = $id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->discount_prize;
            $data['weight'] = 1;
            $data['options']['code'] = $product->product_code;
            $data['options']['image'] = $product->product_image_one;
            $data['options']['color'] = $request->product_color;
            $data['options']['size'] = $request->product_size;
            Cart::add($data);

            $notification = array(
                'messege' => 'Successfully Added To Cart.',
                'alert-type' => 'success'
            );
            return redirect()->to('/')->with($notification);
        }
    }

//    public function updateCart(Request $request){
//        $rowId =$request->productid;
//        $qty=$request->qty;
//        Cart::update($rowId, $qty);
//        return redirect()->back();
//    }


    public function CustomBuildCart(Request $request, $id){
        $product = DB::table('products')->where('id', $id)->first();

        $data = array();
        $data['id'] = $id;
        $data['name'] = $product->product_name;
        $data['qty'] = 1;
        $data['price'] = $product->selling_prize;
        $data['weight'] = 1;
        $data['options']['image'] = $product->product_image_one;

        Cart::add($data);

        $notification = array(
            'messege' => 'Successfully Added To Cart.',
            'alert-type' => 'success'
        );
        return redirect()->route('build.desktop')->with($notification);

    }

    public function ViewCart(){
        $cart = Cart::content();
        return view('pages.cart',compact('cart'));
    }

    public function removeProduct($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }


    public function uploadDesign(Request $request){
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_design_pattern' => 'required',
            ]);

            $data = array();
            $data['user_id'] = Auth::id();
            $design = $request->file('user_design_pattern');
            if($design) {
                $userid = Auth::id();
                $design_name = 'user-'.$userid.'-'.hexdec(uniqid(6));
                $ext = strtolower($design->getClientOriginalExtension());
                $design_fullName = $design_name . '.' . $ext;
                $uploadPath = 'public/backend/media/usersdesign/';
                $imageURL = $uploadPath . $design_fullName;
                $success = $design->move($uploadPath, $design_fullName);
                $data['user_design_pattern'] = $imageURL;
                $udesign = DB::table('userdesigns')->insert($data);

                $notification = array(
                    'messege' => 'Custom Design Uploaded',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
            }

        }else{
            $notification = array(
                'messege' => 'At First Login Your Account',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

}
