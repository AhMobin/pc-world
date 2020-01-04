<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use DB;
class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification);
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


    public function AdminProfile(){
        $adminID = Auth::id();
        $admin = DB::table('admins')->where('id',$adminID)->first();
        return view('admin.admin_profile',compact('admin'));
    }

    public function EditAdminProfile($id){
        $admin = DB::table('admins')->where('id',$id)->first();
        return view('admin.edit_profile',compact('admin'));
    }

    public function UpdateAdminProfile(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;

        $oldphoto = $request->old_photo;

        $image = $request->file('admin_photo');

        if($image) {
            unlink($oldphoto);
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/backend/media/admin/profile/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['admin_photo'] = $imageURL;
            $brand = DB::table('admins')->where('id',$id)->update($data);

            $notification = array(
                'messege' => 'Admin Profile Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('admin.profile')->with($notification);

        }else{
            $brand = DB::table('admins')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Admin Profile Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('admin.profile')->with($notification);
        }
    }



    public function logout()
    {
        Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.login')->with($notification);
    }

}
