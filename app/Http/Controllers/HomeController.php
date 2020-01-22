<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
        return view('pages.user_profile');
    }

    public function changePassword(){
        return view('auth.changepassword');
    }

    public function updatePassword(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('login')->with($notification);
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }

    }

    public function userProfileUpdate(Request $request){
        $id = Auth::id();
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;

        $oldPhoto = $request->old_photo;
        $image = $request->file('user_photo');

        if($image) {
            unlink($oldPhoto);
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/frontend/images/users/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['user_photo'] = $imageURL;
            $brand = DB::table('users')->where('id', $id)->update($data);

            $notification = array(
                'messege' => 'Customer Profile Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('home')->with($notification);
        }else{
            $brand = DB::table('users')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Customer Profile Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('home')->with($notification);
        }
    }

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->to('/')->with($notification);


    }
}
