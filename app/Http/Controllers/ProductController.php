<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;

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


    public function ViewCart(){
        $cart = Cart::content();
        return view('pages.cart',compact('cart'));
    }

    public function removeProduct($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function UpdateCart(Request $request)
    {
        $rowId =$request->productid;
        $qty=$request->qty;
        Cart::update($rowId, $qty);
        return redirect()->back();
    }

}
