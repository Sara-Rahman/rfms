<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Registration()
    {
        return view('user.registration');
    }
}
