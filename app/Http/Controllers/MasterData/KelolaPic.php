<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pic;

class KelolaPic extends Controller
{
    public function index(){
        $pic = Pic::latest()->get();
        // print_r($pic); die;
        return view('MasterData/kelolaPic', compact('pic'));
    }

    public function edit($id)
    {
        // $pic = Pic::latest()->get();
        $pic = Pic::where('id',$id)->get();
        return view('MasterData/editPic',['pic' => $pic]);
    
    }

    public function update(Request $request)
    {
      Pic::where('id',$request->id)->update([
                'name' => $request->name,
            ]);
            echo "<script>
            alert('Berhasil Melakukan Update');
            window.location.href='/kelolapic';
      </script>";
    }

    public function delete($id)
    {
        Pic::where('id',$id)->delete();
        echo "<script>
        alert('Berhasil Menghapus PIC!');
        window.location.href='/kelolapic';
        </script>";
    }
}
