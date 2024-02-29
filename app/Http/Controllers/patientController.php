<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class patientController extends Controller
{
    function register(Request $request)
    {
        $patient = new Patient();
        $patient->firstName = $request->input('fName');
        $patient->lasttName = $request->input('lName');
        $patient->password = Hash::make($request->input('password'));
        $patient->email = $request->input('email');
        $patient->phone = $request->input('phone');
        $patient->save();
        return $patient;       
    }
}
