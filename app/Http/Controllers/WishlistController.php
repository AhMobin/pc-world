<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class WishlistController extends Controller
{
    public function AddWishlist($id){
        $userid = Auth::id();
        $check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();
        $data = array(
            'user_id' => $userid,
            'product_id' => $id
        );

        if(Auth::check()){
            if($check){
                return \Response::json(['error' => 'Already Has On Your Wishlist']);
            }else{
                DB::table('wishlists')->insert($data);
                return \Response::json(['success' => 'Product Added On Your Wishlist']);
            }
        }else{
            return \Response::json(['error' => 'At First Login Your Account']);
        }
    }
}
