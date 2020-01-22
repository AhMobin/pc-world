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
        $headphone = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',3)->where('subcategory_id',5)->where('status',1)->orderBy('id','DESC')->get();

        $gears = DB::table('subcategories')->where('category_id',3)->get();
        return view('pages.gear.gear', compact('gears','headphone'));
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
}
