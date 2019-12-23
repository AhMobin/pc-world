<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showNewsletter(){
        $subs = DB::table('newsletters')->get();
        return view('admin.coupon.newsletter',compact('subs'));
    }

    public function deleteNewsletter($id){
        DB::table('newsletters')->where('id',$id)->delete();

        $notification = array(
            'messege' => 'Subscriber Has Been Deleted.',
            'alert-type' => 'error'
        );

        return Redirect()->back()->with($notification);
    }
}
