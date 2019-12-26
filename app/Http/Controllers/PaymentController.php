<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Cart;

class PaymentController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function PaymentProcess(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
            'city' => 'required',
            'zip' => 'required',
            'physical_address' => 'required',
            'payment' => 'required',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone_number;
        $data['email_address'] = $request->email_address;
        $data['city'] = $request->city;
        $data['zip'] = $request->zip;
        $data['physical_address'] = $request->physical_address;
        $data['payment'] = $request->payment;

        if($request->payment == 'stripe'){
            $notification = array(
                'messege' => 'Sorry!! Currently This Gateway Is Not Available. Use bKash.',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);

        }else if($request->payment == 'paypal'){
            $notification = array(
                'messege' => 'Sorry!! Currently This Gateway Is Not Available. Use bKash.',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);

        }else if($request->payment == 'ideal'){
            $notification = array(
                'messege' => 'Sorry!! Currently This Gateway Is Not Available. Use bKash.',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);

        }else if($request->payment == 'bkash'){
            return view('pages.payment.bkash',compact('data'));

        }else{
            echo "Hand Cash";
        }

    }

    public function bKashPayment(Request $request){
        $data = array();

//        $data['order_id'] = uniqid(5);
        $data['user_id'] = Auth::id();
        $data['tranx_id'] = $request->tranx_id;
        $data['paying_amount'] = $request->paying_amount;

        $data['shipping_charge'] = $request->shipping_charge;
        $data['tax'] = $request->tax;
        $data['total_amount'] = $request->total_amount;
        $data['payment_type'] = $request->payment_type;
        $data['status'] = 0;
        $data['date']=date('d-m-y');
        $data['month']=date('F');
        $data['year']=date('Y');
//        $data['status_code']=mt_rand(100000,999999);
        $order_id=DB::table('orders')->insertGetId($data);


        // insert shipping details table
        $shipping=array();
        $shipping['order_id']=$order_id;
        $shipping['ship_name']=$request->ship_name;
        $shipping['ship_phone']=$request->ship_phone;
        $shipping['ship_email']=$request->ship_email;
        $shipping['ship_zip']=$request->ship_zip;
        $shipping['ship_city']=$request->ship_city;
        $shipping['ship_address']=$request->ship_address;

        DB::table('shippings')->insert($shipping);

//        $notification = array(
//            'messege' => 'Done',
//            'alert-type' => 'success'
//        );
//        return Redirect()->back()->with($notification);


        //insert data into orderdeatils
        $content=Cart::content();
        $details=array();
        foreach ($content as $row) {
            $details['order_id']= $order_id;
            $details['product_id']=$row->id;
            $details['product_name']=$row->name;
            $details['color']=$row->options->color;
            $details['size']=$row->options->size;
            $details['quantity']=$row->qty;
            $details['single_price']=$row->price;
            $details['total_price']=$row->qty * $row->price;
            DB::table('order_details')->insert($details);
        }

        Cart::destroy();

        $notification = array(
            'messege' => 'Successfully Order Done',
            'alert-type' => 'success'
        );
        return Redirect()->to('/')->with($notification);




    }
}
