<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function StoreNewsletter(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:newsletters|max:55',
        ]);

        $data = array();
        $data['email'] = $request -> email;
        DB::table('newsletters')->insert($data);

        $notification = array(
            'messege' => 'Thanks For Subscribing.',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
