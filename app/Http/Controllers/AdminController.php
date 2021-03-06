<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Crisis;

class AdminController extends Controller
{
    public function Crisis()
    {
        $crisislist = Crisis::all();
        return view('admin.crisis',compact('crisislist'));
    }
    public function Donation()
    {
        return "Would you like to donate?";
        
    }
    public function AdminLogin()
    {
        return view('admin.adminlogin');
    }
    public function CreateCrisis()
    {
        return view('admin.create-crisis');
    }
    public function CrisisStore(Request $request)
    {
        // dd($request->all());
        Crisis::create([

            'id'=>$request->id,
            'name'=>$request->name,
            'type'=>$request->type,
            'amount'=>$request->amount,
        
        ]);
        return redirect()->back();
    }
}
