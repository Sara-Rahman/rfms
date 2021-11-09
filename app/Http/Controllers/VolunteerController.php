<?php

namespace App\Http\Controllers;

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
    
}
