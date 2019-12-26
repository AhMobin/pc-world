<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


    public function GearPage(){
        return view('pages.gear.gear');
    }

    public function GamingDesktop(){
        return view('pages.desktop.gaming_desktop');
    }

    public function BuildDesktop(){
        return view('pages.desktop.custom_desktop');
    }

    public function Workstation(){
        return view('pages.desktop.workstation');
    }

    public function GamingLaptop(){
        return view('pages.laptop.gaming_laptop');
    }

    public function NormalLaptop(){
        return view('pages.laptop.normal_laptop');
    }

}
