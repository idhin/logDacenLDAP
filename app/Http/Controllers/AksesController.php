<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AksesController extends Controller
{
    public function index (){
        $user = User::latest()->get();
        
        return view('accesscontrol');
    }
}
