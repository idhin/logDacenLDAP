<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Barcode extends Controller
{
    public function index(){
        return view ('barcode');
    }
}
