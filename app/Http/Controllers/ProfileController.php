<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //edit User Profile

    public function editUserProfile()
    {


        return view('admin.profile.edit-profile',[

            'profile' =>  Profile::where('user_id',Auth::id())->first(),

        ]);

    }

    public function updateUserProfile(Request $request)
    {

        $request->validate([

            'contact_number'    => 'required|string|max:255',
            'age'               => 'date',
            'gender'            => 'in:male,female,others',
            'location'          => 'required|string|max:255',
            'work_status'       => 'required|string|max:255',
            'job_complete'      => 'required|string|max:255',
            'experience'        => 'required|string|max:255',
            'referable'         => 'required|string|max:255',
            'cpr_certificate'   => 'required|string|max:255',
            'driving_license'   => 'required|string|max:255',
            'verified_document' => 'required|string|max:255',
            'star_ratting'      => 'required|string|max:255',
        ]);


         $profile = Profile::where('user_id' , Auth::id())->first();


         $profile->contact_number = $request->contact_number;
         $profile->age = $request->age;
         $profile->gender = $request->gender;
         $profile->location = $request->location;
         $profile->work_status = $request->work_status;
         $profile->job_complete = $request->job_complete;
         $profile->experiences = $request->experience;
         $profile->referable = $request->referable;
         $profile->cpr_certificate = $request->cpr_certificate;
         $profile->driving_licence = $request->driving_license;
         $profile->verified_documents = $request->verified_documents;
         $profile->star_ratting = $request->star_ratting;
         $profile->save();

        return redirect()->back()->with('success','Profile update sucessfully.');
    }






}
