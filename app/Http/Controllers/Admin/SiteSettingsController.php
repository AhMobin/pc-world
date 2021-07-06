<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class SiteSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function ViewLogos(){
        $logos = DB::table('logos')->get();
        return view('admin.Settings.branding_logos',compact('logos'));
    }

    public function ChangeLogo(Request $request){
        $data = array();
        $logo_img = $request->branding_logo;
        $logo_name = hexdec(uniqid()).'.'.$logo_img->getClientOriginalExtension();
        Image::make($logo_img)->resize(180,120)->save('public/backend/media/settings/logos/'.$logo_name);
        $data['branding_logo'] = 'public/backend/media/settings/logos/'.$logo_name;
        $logo = DB::table('logos')->insert($data);

        $notification = array(
            'messege' => 'Branding Logo Inserted Successful',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function LogoActivation($id){
        DB::table('logos')->update(['status'=>0]);
        $active = DB::table('logos')->where('id',$id)->update(['status'=>1]);
        $notification = array(
            'messege' => 'Logo Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function LogoDeactivation($id){
        DB::table('logos')->update(['status'=>0]);
        $active = DB::table('logos')->where('id',$id)->update(['status'=>0]);
        $notification = array(
            'messege' => 'Logo Deactivated',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }

    public function LogoDeletion($id){
        $data = DB::table('logos')->where('id',$id)->first();
        $image = $data->branding_logo;
        unlink($image);

        DB::table('logos')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Logo Deleted',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function ViewSliders(){
        $sliders = DB::table('sliders')->get();
        return view('admin.settings.homepage_sliders',compact('sliders'));
    }

    public function AddSlider(Request $request){
        $data = array();
        $data['slider_title'] = $request->slider_title;
        $data['slider_subdesc'] = $request->slider_subdesc;
        $data['slider_description'] = $request->slider_description;
        $data['slider_btn_link'] = $request->slider_btn_link;
        $data['slider_btn'] = $request->slider_btn;

        $new = $request->file('slider_image');

        $image_name = date('dmy_H_s_i');
        $ext = strtolower($new->getClientOriginalExtension());
        $image_fullName = $image_name . '.' . $ext;
        $uploadPath = 'public/frontend/images/slider/';
        $imageURL = $uploadPath . $image_fullName;
        $success = $new->move($uploadPath, $image_fullName);
        $data['slider_image'] = $imageURL;
        $brand = DB::table('sliders')->insert($data);

        $notification = array(
            'messege' => 'Slider Updated Successful',
            'alert-type' => 'success'
        );
        return Redirect()->route('view.sliders')->with($notification);

    }



    public function showSingleSlider($id){
        $slider = DB::table('sliders')->where('id',$id)->first();
        return view('admin.settings.view_slider',compact('slider'));
    }

    public function EditSlider($id){
        $slider = DB::table('sliders')->where('id',$id)->first();
        return view('admin.settings.edit_slider',compact('slider'));
    }

    public function UpdateSlider(Request $request, $id){
        $data = array();
        $data['slider_title'] = $request->slider_title;
        $data['slider_subdesc'] = $request->slider_subdesc;
        $data['slider_description'] = $request->slider_description;
        $data['slider_btn'] = $request->slider_btn;
        $data['slider_btn_link'] = $request->slider_btn_link;
        $oldSlider = $request->old_slider;
        $new = $request->file('slider_image');

        if($new) {
            unlink($oldSlider);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($new->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/frontend/images/slider/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $new->move($uploadPath, $image_fullName);
            $data['slider_image'] = $imageURL;
            $brand = DB::table('sliders')->where('id',$id)->update($data);

            $notification = array(
                'messege' => 'Slider Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('view.sliders')->with($notification);

        }else{
            $brand = DB::table('sliders')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Slider Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('view.sliders')->with($notification);
        }
    }

    public function DeleteSlider($id){
        $data = DB::table('sliders')->where('id',$id)->first();
        $image = $data->slider_image;
        unlink($image);

        DB::table('sliders')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Slider Deleted',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function ActivateSlider($id){
        DB::table('sliders')->where('id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Slider Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeactivateSlider($id){
        DB::table('sliders')->where('id',$id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Slider Deactivated',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }

    public function OurFocus(){
        $focus = DB::table('focuses')->get();
        return view('admin.settings.our_focus', compact('focus'));
    }

    public function OurFocusStore(Request $request){
        $validatedData = $request->validate([
            'focus_title' => 'required|max:20',
            'focus_desc' => 'required|max:600',
        ]);

        $data = array();
        $data['focus_title'] = $request->focus_title;
        $data['focus_desc'] = $request->focus_desc;

        $image = $request->file('focus_image');
        $image_name = 'focus-'.uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $image_fullName = $image_name . '.' . $ext;
        $uploadPath = 'public/backend/media/settings/focus/';
        $imageURL = $uploadPath . $image_fullName;
        $success = $image->move($uploadPath, $image_fullName);
        $data['focus_image'] = $imageURL;

        DB::table('focuses')->insert($data);
        $notification = array(
            'messege' => 'Focus Added',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function ViewFocus($id){
        $viewfocus = DB::table('focuses')->where('id',$id)->first();
        return view('admin.settings.single_focus', compact('viewfocus'));
    }

    public function ActivateFocus($id){
        DB::table('focuses')->where('id',$id)->update(['status'=> 1]);
        $notification = array(
            'messege' => 'Focus Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeactivateFocus($id){
        DB::table('focuses')->where('id',$id)->update(['status'=> 0]);
        $notification = array(
            'messege' => 'Focus Deactivated',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
        
    }

    public function DeleteFocus($id){
        DB::table('focuses')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Focus Deleted',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }


    public function EditFocus($id){
        $singlefocus = DB::table('focuses')->where('id',$id)->first();
        return view('admin.settings.edit_focus',compact('singlefocus'));
    }

    public function UpdateFocus(Request $request, $id){
        $validatedData = $request->validate([
            'focus_title' => 'required',
            'focus_desc' => 'required',
        ]);
        
        $oldfocus = $request->old_focus;
        $data = array();
        $data['focus_title'] = $request->focus_title;
        $data['focus_desc'] = $request->focus_desc;
        $image = $request->file('focus_image');
        if($image) {
            unlink($oldfocus);
            $image_name = 'focus-'.uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/backend/media/settings/focus/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['focus_image'] = $imageURL;
            $focus = DB::table('focuses')->where('id',$id)->update($data);

            $notification = array(
                'messege' => 'Focus Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('our.focus.panel')->with($notification);

        }else{
            $focus = DB::table('focuses')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Focus Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('our.focus.panel')->with($notification);
        }
    }
	
	
    public function ViewFeatures(){
        $reviews = DB::table('featured_reviews')->get();
        return view('admin.settings.featured',compact('reviews'));
    }

    public function AddFeaturedReview(Request $request){
        $data = array();
        $data['feature_title'] = $request->feature_title;
        $data['feature_review'] = $request->feature_review;
        $data['feature_btn'] = $request->feature_btn;
        $data['feature_btn_link'] = $request->feature_btn_link;

        $new = $request->file('feature_image');

        $image_name = date('dmy_H_s_i');
        $ext = strtolower($new->getClientOriginalExtension());
        $image_fullName = $image_name . '.' . $ext;
        $uploadPath = 'public/frontend/images/reviews/';
        $imageURL = $uploadPath . $image_fullName;
        $success = $new->move($uploadPath, $image_fullName);
        $data['feature_image'] = $imageURL;
        $brand = DB::table('featured_reviews')->insert($data);

        $notification = array(
            'messege' => 'Featued Review Inserted Successful',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }



    public function showSingleReview($id){
        $review = DB::table('featured_reviews')->where('id',$id)->first();
        return view('admin.settings.view_review',compact('review'));
    }

    public function EditReview($id){
        $review = DB::table('featured_reviews')->where('id',$id)->first();
        return view('admin.settings.edit_review',compact('review'));
    }

    public function UpdateReview(Request $request, $id){
        $data = array();
        $data['feature_title'] = $request->feature_title;
        $data['feature_review'] = $request->feature_review;
        $data['feature_btn'] = $request->feature_btn;
        $data['feature_btn_link'] = $request->feature_btn_link;
        $oldReview = $request->old_review;
        $new = $request->file('feature_image');

        if($new) {
            unlink($oldReview);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($new->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/frontend/images/reviews/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $new->move($uploadPath, $image_fullName);
            $data['feature_image'] = $imageURL;
            $brand = DB::table('featured_reviews')->where('id',$id)->update($data);

            $notification = array(
                'messege' => 'Slider Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('views.featured.reivews')->with($notification);

        }else{
            $brand = DB::table('featured_reviews')->where('id',$id)->update($data);
            $notification = array(
                'messege' => 'Review Updated Successful',
                'alert-type' => 'success'
            );
            return Redirect()->route('views.featured.reivews')->with($notification);
        }
    }

    public function DeleteReview($id){
        $data = DB::table('featured_reviews')->where('id',$id)->first();
        $image = $data->feature_image;
        unlink($image);

        DB::table('featured_reviews')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Review Deleted',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function ActivateReview($id){
        DB::table('featured_reviews')->where('id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Review Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeactivateReview($id){
        DB::table('featured_reviews')->where('id',$id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Review Deactivated',
            'alert-type' => 'warning'
        );
        return Redirect()->back()->with($notification);
    }



    public function ViewRecommendations(){
        $recom = DB::table('our_recommendations')->get();
        return view('admin.settings.our_recom',compact('recom'));
    }

    public function AddRecommendation(Request $request){
        $validatedData = $request->validate([
            'recom_title' => 'required',
            'cpu' => 'required',
            'motherboard' => 'required',
            'ram' => 'required',
            'gpu' => 'required',
            'storage' => 'required',
            'recom_image' => 'required',
            'price' => 'required',
        ]);

        $data = array();
        $data['recom_title'] = $request->recom_title;
        $data['cpu'] = $request->cpu;
        $data['motherboard'] = $request->motherboard;
        $data['ram'] = $request->ram;
        $data['gpu'] = $request->gpu;
        $data['storage'] = $request->storage;
        $data['price'] = $request->price;

        $image = $request->file('recom_image');
        $image_name = 'recom-'.uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $image_fullName = $image_name . '.' . $ext;
        $uploadPath = 'public/backend/media/recommendations/';
        $imageURL = $uploadPath . $image_fullName;
        $success = $image->move($uploadPath, $image_fullName);
        $data['recom_image'] = $imageURL;

        $recommendation = DB::table('our_recommendations')->insert($data);

        $notification = array(
            'messege' => 'New Recommendation Added',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }

    public function showRecommendation($id){
        $show = DB::table('our_recommendations')->where('id',$id)->first();
        return view('admin.settings.show_recom',compact('show'));
    }

    public function EditRecommendation($id){
        $edit = DB::table('our_recommendations')->where('id',$id)->first();
        return view('admin.settings.edit_recom',compact('edit'));
    }

    public function UpdateRecommendation(Request $request, $id){
        $data = array();
        $data['recom_title'] = $request->recom_title;
        $data['cpu'] = $request->cpu;
        $data['motherboard'] = $request->motherboard;
        $data['ram'] = $request->ram;
        $data['gpu'] = $request->gpu;
        $data['storage'] = $request->storage;
        $data['price'] = $request->price;

        $old_image = $request->old_recom;
        $image = $request->file('recom_image');

        if($image){
            unlink($old_image);
            $image_name = 'recom-'.uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name . '.' . $ext;
            $uploadPath = 'public/backend/media/recommendations/';
            $imageURL = $uploadPath . $image_fullName;
            $success = $image->move($uploadPath, $image_fullName);
            $data['recom_image'] = $imageURL;
            $updateWithImage = DB::table('our_recommendations')->where('id',$id)->update($data);

            $notification = array(
            'messege' => 'Recommendation Updated Successfull',
            'alert-type' => 'success',
            );
            return Redirect()->route('our.recommendation')->with($notification);

        }else{
            $updateWithOutImage = DB::table('our_recommendations')->where('id',$id)->update($data);

            $notification = array(
            'messege' => 'Recommendation Updated Successfull',
            'alert-type' => 'success',
        );
        return Redirect()->route('our.recommendation')->with($notification);
        }
    }

    public function DeleteRecommendation($id){
        $delete = DB::table('our_recommendations')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Recommendation Deleted',
            'alert-type' => 'warning',
        );
        return Redirect()->back()->with($notification);
    }

    public function ActivateRecommendation($id){
        $active = DB::table('our_recommendations')->where('id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Recommendation Activated',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }

    public function DeactivateRecommendation($id){
        $deactive = DB::table('our_recommendations')->where('id',$id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Recommendation Deactivated',
            'alert-type' => 'warning',
        );
        return Redirect()->back()->with($notification);
    }
}
