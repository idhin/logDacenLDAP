<?php

namespace App\Http\Controllers\MasterData;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pic;


class KelolaVendor extends Controller
{
    public function index(){
        $vendor = Vendor::join('pics','pics.id','=','vendors.pic_id')->get(['vendors.*','pics.name as namaPic']);

        return view ('MasterData/kelolaVendor', compact('vendor'));
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        $pic = Pic::latest()->get();
        $vendor = Vendor::where('id',$id)->get();
        // print_r($vendor);
        return view('MasterData/editVendor',['vendor' => $vendor,'pic' => $pic]);
    
    }

    public function update(Request $request)
    {
        if ($request->pic_id){
            // echo ($request->id); die;
            Vendor::where('id',$request->id)->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'pic_id' => $request->pic_id
            ]);
            echo "<script>
            alert('Berhasil Melakukan Update');
            window.location.href='/kelolavendor';
      </script>";
        }else{
            echo "<script>
                        alert('Belum terupdate! Mohon isi nama PIC');
                        window.location.href='/kelolavendor';
                  </script>";
        }
        
    }

    public function delete($id)
    {
        Vendor::where('id',$id)->delete();
        echo "<script>
        alert('Berhasil Menghapus');
        window.location.href='/kelolavendor';
        </script>";
    }

}
