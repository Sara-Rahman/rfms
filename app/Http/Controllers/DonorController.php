<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
class DonorController extends Controller
{
     public function Registration()
     {
         return view('user.registration');
     }
     public function Donation()
     {
         $donationlist = Donation::all();
         return view('admin.donation',compact('donationlist'));
     }
     public function DonorLogin()
     {
         return view('user.donorlogin');
     }
     public function CreateDonation()
     {
       
        return view('user.create-donation');
     }
     public function StoreDonation(Request $request)
     {
        // dd($request->all());
        Donation::create([
            
            'id'=>$request->id,
            'donorname'=>$request->donorname,
            'email'=>$request->email,
            'number'=>$request->number,
            'donortype'=>$request->donortype,
            'donoramount'=>$request->donoramount,
        
        ]);
        return redirect()->back();
     }
}
