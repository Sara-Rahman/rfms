<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Crisis()
    {
        
        return view('admin.crisis');
    }
    public function Donation()
    {
        return "Would you like to donate?";
        
    }
    public function AdminLogin()
    {
        return view('admin.adminlogin');
    }
}
