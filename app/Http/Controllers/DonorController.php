<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Donation()
    {
        return view('user.registration');
    }
}
