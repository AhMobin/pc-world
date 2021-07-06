<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class PageController extends Controller
{
    public function IndexPage(){
        
        return view('pages.index');
    }

    public function SupportPage(){
        return view('pages.support');
    }

    public function ContactPage(){
        return view('pages.contact');
    }

    public function AboutPage(){
        return view('pages.about');
    }

    public function UserProfilePage(){
        return view('pages.user_profile');
    }

    public function userProfileEdit(){
        $customer = DB::table('users')->where('id', Auth::id())->first();
        return view('pages.userprofile_edit',compact('customer'));
    }


    public function GearPage(){
        $brands = DB::table('brands')->get();

        $keyboards = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',22)->where('status',1)->orderBy('id','DESC')->get();
        $mouse = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',23)->where('status',1)->orderBy('id','DESC')->get();
        $headphones = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',5)->where('status',1)->orderBy('id','DESC')->get();
        $earphones = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',25)->where('status',1)->orderBy('id','DESC')->get();
        $speakers = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',24)->where('status',1)->orderBy('id','DESC')->get();
        $webcams = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',26)->where('status',1)->orderBy('id','DESC')->get();
        $cable_pads = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',27)->where('status',1)->orderBy('id','DESC')->get();
        return view('pages.gear.gear', compact('brands','keyboards','mouse','headphones','earphones','speakers','webcams','cable_pads'));
    }

    public function Workstation(){
        return view('pages.desktop.workstation');
    }

    public function BuildDesktop(){
        return view('pages.desktop.custom_desktop');
    }

    public function GamingLaptop(){
        return view('pages.laptop.gaming_laptop');
    }

    public function NormalLaptop(){
        return view('pages.laptop.normal_laptop');
    }

    //get in touch
    public function geInTouch(Request $request){
        $validatedData = $request->validate([
              'get_name' => 'required',
              'get_email' => 'required|email',
              'get_subject' => 'required',
              'get_message' => 'required',
          ]);
  
          $data = array();
          $data['get_name'] = $request->get_name;
          $data['get_email'] = $request->get_email;
          $data['get_subject'] = $request->get_subject;
          $data['get_message'] = $request->get_message;
  
          $comment = DB::table('customer_comments')->insert($data);
  
          $notification=array(
            'messege'=>'Thanks For Get In Touch',
            'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
      }
}
