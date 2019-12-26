<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;
use Auth;

class CheckoutController extends Controller
{


    public function Checkout(Request $request){
        $cart = Cart::content();
        return view('pages.checkout',compact('cart'));
    }


    public function PaymentPage(){
        $cart = Cart::content();
        return view('pages.payment',compact('cart'));
    }
}
