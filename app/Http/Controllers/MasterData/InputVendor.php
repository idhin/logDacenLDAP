<?php

namespace App\Http\Controllers\MasterData;

use App\Models\Pic;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputVendor extends Controller
{
    public function index(){
        $pic = Pic::latest()->get();
        return view('MasterData/inputVendor', compact('pic'));
    }

    public function store(Request $request){
        $vendor = Vendor::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'pic_id' => $request->pic_id
        ]);

        if ($vendor){
            return redirect('kelolavendor')->with('Sukses','Berhasil menambahkan Vendor!');;
        }else{
            return Redirect::back()->with('message','Gagal, cek kembali !');
        }
    }
}
