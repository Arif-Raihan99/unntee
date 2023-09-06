<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // profile page
    public function profile($id=null){
        return view('admin.profile.profile',[
            'profile' =>  Profile::where('user_id', $id ? decrypt($id) : Auth::id())->first(),
        ]);
    }

    // edit profile
    public function edit(){

        return view('admin.profile.edit-profile',[
            'profile' =>  Profile::where('user_id',Auth::id())->first(),
        ]);
    }


    // update profile
    public function update(Request $request){

        $request->validate([
            'contact_number'    => ['nullable', 'numeric', 'max:20'],
            'age'               => ['nullable','date'],
            'gender'            => ['nullable', 'in:male,female,others'],
            'location'          => ['nullable', 'string'],
            'experience'        => ['nullable', 'numeric'],
            'referable'         => ['nullable', 'string'],
            'cpr_certificate'   => ['nullable', 'file'],
            'driving_license'   => ['nullable', 'file'],
            'verified_document' => ['nullable', 'string'],
            'star_ratting'      => ['nullable', 'numeric'],

//            'image' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);

         $profile = Profile::where('user_id' , Auth::id())->first();

         $profile->contact_number     = $request->contact_number;
         $profile->age                = $request->age;
         $profile->gender             = $request->gender;
         $profile->location           = $request->location;
         $profile->experiences        = $request->experience;
         $profile->referable          = $request->referable;
         $profile->cpr_certificate    = $request->cpr_certificate;
         $profile->driving_licence    = $request->driving_license;

//        $profile->image = getImageUrl($request->file('image'), '/assets/assets/media/user/');

         return redirect()->back()->with('success','Profile update successfully.');
    }
}
