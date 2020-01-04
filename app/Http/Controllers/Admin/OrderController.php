<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function NewOrder(){
        $orders = DB::table('orders')->where('status',0)->get();
        return view('admin.order.new_order',compact('orders'));
    }



    public function ViewOrder($id){
        $order = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.phone','users.email')
            ->where('orders.id',$id)
            ->first();

        $shipping = DB::table('shippings')->where('order_id',$id)->first();

        $details = DB::table('order_details')
            ->join('products','order_details.product_id','products.id')
            ->select('order_details.*','products.product_code','products.product_image_one')
            ->where('order_details.order_id',$id)
            ->get();

        return view('admin.order.view_order',compact('order','shipping','details'));
    }

    public function AcceptOrder($id){
        DB::table('orders')->where('id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Payment Accept Done',
            'alert-type' => 'success'
        );
        return Redirect()->route('payment.accepted')->with($notification);
    }

    public function CancelOrder($id){
        DB::table('orders')->where('id',$id)->update(['status' => 4]);
        $notification = array(
            'messege' => 'Order Canceled',
            'alert-type' => 'error'
        );
        return Redirect()->route('new.order')->with($notification);
    }

    public function OrderInProgress($id){
        DB::table('orders')->where('id',$id)->update(['status' => 2]);
        $notification = array(
            'messege' => 'Order Run Into Delivery Progress',
            'alert-type' => 'success'
        );
        return Redirect()->route('order.run.progress')->with($notification);
    }

    public function OrderDelivered($id){
        DB::table('orders')->where('id',$id)->update(['status' => 3]);
        $notification = array(
            'messege' => 'Order Successfully Delivered',
            'alert-type' => 'success'
        );
        return Redirect()->route('new.order')->with($notification);
    }

    public function PaidOrder(){
        $orders = DB::table('orders')->where('status',1)->get();
        return view('admin.order.payment_accept',compact('orders'));
    }

    public function DeliverProgressOrder(){
        $orders = DB::table('orders')->where('status',2)->get();
        return view('admin.order.progress_order',compact('orders'));
    }

    public function DeliveredOrder(){
        $orders = DB::table('orders')->where('status',3)->get();
        return view('admin.order.delivered_order',compact('orders'));
    }

    public function CanceledOrder(){
        $orders = DB::table('orders')->where('status',4)->get();
        return view('admin.order.canceled',compact('orders'));
    }

}
