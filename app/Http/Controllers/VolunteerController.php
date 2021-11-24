<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;


use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function Registration()
    {
        return view('user.registration');
    }
    public function Distribution()
    {
        return view('user.distribution');
    }
    public function VolunteerLogin()
     {
         $volunteerlist=Volunteer::all();
         return view('volunteer.volunteerlogin',compact('volunteerlist'));
     }
     public function CreateVolunteer()
     {
         return view('volunteer.create-volunteer');
     }
     public function StoreVolunteer(Request $request)
     {
        // dd($request->all());
        Volunteer::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "age"=>$request->age,
            "education"=>$request->education,
            "occupation"=>$request->occupation,
            "phn_number"=>$request->phn_number,
            "address"=>$request->address,
            "gender"=>$request->gender,
            "crisis"=>$request->crisis,
            "password"=>$request->password,


        ]);
        return redirect()->back()->with('success','Volunteer Account has created successfully');

        

        
     }

    
}
