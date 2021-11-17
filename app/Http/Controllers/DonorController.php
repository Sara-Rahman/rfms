<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
     public function Registration()
     {
         return view('user.registration');
     }
     public function Donation()
     {
         return view('admin.donation');
     }
     public function DonorLogin()
     {
         return view('user.donorlogin');
     }
     public function CreateDonation()
     {
         return view('user.create-donation');
     }
}
