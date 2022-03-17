<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index(){
        $data = [
            'vendor' =>Vendor::latest()->get()->count() ,
            'pic' =>Pic::latest()->get()->count(),
            'visitors' =>Visitor::latest()->get()->count()
        ];

        // print_r($data); die;
        return view('dashboard',)->with($data);
    }

    public function logout(){
        
        Auth::logout();

        return redirect('login');
    }
}


