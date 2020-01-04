<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;
use Response;
use Auth;
use Session;


class CartController extends Controller
{
    public function AddtoCart($id){
       $product = DB::table('products')->where('id',$id)->first();

       $data = array();
       if($product-> discount_prize == NULL){
           $data['id'] = $product->id;
           $data['name'] = $product->product_name;
           $data['qty'] = 1;
           $data['price'] = $product->selling_prize;
           $data['weight'] = 1;
           $data['options']['code'] = $product->product_code;
           $data['options']['image'] = $product->product_image_one;
           $data['options']['color'] = '';
           $data['options']['size'] = '';
           Cart::add($data);
           return \Response::json(['success' => 'Added To Your Cart']);
       }else{
           $data['id'] = $product->id;
           $data['name'] = $product->product_name;
           $data['qty'] = 1;
           $data['price'] = $product->discount_prize;
           $data['weight'] = 1;
           $data['options']['code'] = $product->product_code;
           $data['options']['image'] = $product->product_image_one;
           $data['options']['color'] = '';
           $data['options']['size'] = '';
           Cart::add($data);
           return \Response::json(['success' => 'Added To Your Cart']);
       }
    }

    public function AddIntoCart($id){
        $product = DB::table('products')->where('id',$id)->first();

        $data = array();
        if($product-> discount_prize == NULL){
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_prize;
            $data['weight'] = 1;
            $data['options']['code'] = $product->product_code;
            $data['options']['image'] = $product->product_image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            Cart::add($data);

            $notification = array(
                'messege' => 'Product Added To Cart',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);

        }else{
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_prize;
            $data['weight'] = 1;
            $data['options']['code'] = $product->product_code;
            $data['options']['image'] = $product->product_image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            Cart::add($data);

            $notification = array(
                'messege' => 'Product Added To Cart',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function updateCart(Request $request){
        $rowId =$request->productid;
        $qty=$request->qty;
        Cart::update($rowId, $qty);
        return redirect()->back();

    }

    public function checkCartContent(){
        $content = Cart::content();
        return response()->json($content);
    }
}
