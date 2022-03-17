<?php

namespace App\Http\Controllers\MasterData;

use App\Models\Pic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class InputPic extends Controller
{
    public function index(){
        return view('/MasterData/inputPic');
    }

    public function store(Request $request){
        $pic = Pic::create(
                [
                    'name' => $request->name
                ]
            );
        if ($pic){
            // return redirect()->back()->with('alert','Sukses Menambahkan PIC!');
            $message = "Sukses Menambahkan PIC";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return redirect('/kelolapic'); 
        }else{
            return redirect()->back()->with('alert','Gagal! Silahkan Check Kembali');
        }
    }
}
