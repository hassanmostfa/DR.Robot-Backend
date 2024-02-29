<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    function createProfile(Request $request) {
        $profile = new Profile();
        $profile->dob = $request->input('dob');
        $profile->blood_type = $request->input('blood_type');
        $profile->drug_allergies = $request->input('drug_allergies');
        $profile->food_allergies = $request->input('food_allergies');
        $profile->gender = $request->input('gender');
        $profile->image = $request->file('image')->store('images');
        $profile->height = $request->input('height');
        $profile->weight = $request->input('weight');
        $profile->patient_id = $request->input('patient_id');
        // $profile->save();
        return $profile;
    }
}
