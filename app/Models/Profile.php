<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;



    protected $fillable = [
        'age','gender','contact_number','job_complete','experiences','verified_documents','location','cpr_certificate',
        'driving_licence','star_ratting','referable','work_status',
    ];

    public static function ProfileCreate($request)
    {
        // Make sure the user is authenticated before proceeding
        if (Auth::check()) {
            $profile           = new Profile();
            $profile->user_id = Auth::id(); // Assuming user_id is the foreign key linking profiles to users
            $profile->age = $request->age;
            $profile->gender = $request->gender;
            $profile->contact_number = $request->contact_number;
            $profile->job_complete = $request->job_complete;
            $profile->experiences = $request->experiences;
            $profile->verified_documents = $request->verified_documents;
            $profile->location = $request->location;
            $profile->cpr_certificate = $request->cpr_certificate;
            $profile->driving_licence = $request->driving_licence;
            $profile->star_rating = $request->star_rating; // Fixed typo: star_ratting -> star_rating
            $profile->referable = $request->referable;
            $profile->work_status = $request->work_status;
            $profile->save();
        }
    }

}
