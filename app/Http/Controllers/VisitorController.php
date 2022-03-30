<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Exports\VisitorExport;
use Maatwebsite\Excel\Facades\Excel;


class VisitorController extends Controller
{
    public function index(){
        // $visitor = Visitor::latest()->get();
        $visitor = Visitor::join('vendors', 'vendors.id', '=', 'visitors.vendor_id')->join('pics','pics.id','=','vendors.pic_id')
        ->get(['visitors.*', 'vendors.name as vendorName', 'vendors.pic_id as pic_id','pics.name as namaPic']);

        foreach ($visitor as $v){
            $pic_idExtract = $v->pic_id;
            // $pic[] = Pic::where('id',$pic_idExtract)->pluck('name')->first();
            $namaPic[] = Pic::where('id',$pic_idExtract)->pluck('name')->first();
        }

        // $pic = Pic::where('id',$pic_idExtract)->pluck('name')->first();

        // print_r($visitor); die;
        return view('visitor',['visitor' => $visitor]);
    }


    public function export() 
    {
            $currentDateTime = date('Y-m-d H:i:s');
            return Excel::download(new VisitorExport, 'DataPengunjung-'.$currentDateTime.'.xlsx');
    }


    public function checkIP(Request $request){
        $ip = file_get_contents('https://api.ipify.org');
        echo "My public IP address is: " . $ip; 
    }

    public function logbook(){
        $data = [
            'vendor' =>Vendor::latest()->get(),
            'pic' => Pic::latest()->get()
        ];
        // $vendor = Vendor::latest()->get();
        return view('logbook')->with($data);
    }

    public function store(Request $request){
        $agent = $request->header('user-agent');

        // dd($agent);
        $vendorName = $request->vendorName;
        $vendorMail = $request->vendorMail;
        $vendorPhone = $request->vendorPhone;
        $device = $request->device;
        $serialDevice = $request->serialDevice;
        $pic_id = $request->pic_id;
        $ipVisitor = file_get_contents('https://api.ipify.org');

        // echo($device); die;
        if ($device=="" OR $serialDevice==""){
            $device ="Tidak Ada Device";
            $serialDevice = "Tidak Input Serial Number";
        }
        // echo($device); die;

        if ($vendorName != ""){
            $vendor = Vendor::create(
                    [
                        'name' => $vendorName,
                        'phone_number' => $vendorPhone,
                        'email' => $vendorMail,
                        'pic_id' => $pic_id,
                        'device' => $device,
                        'serialDevice' => $serialDevice
                    ]
            );
          

            $vendorID = $vendor['id'];

            $visitors = Visitor::create(
                [
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'purpose' => $request->purpose,
                    'vendor_id' => $vendorID,
                    'useragent' => $agent,
                    'ipVisitor' => $ipVisitor,
                    'device' => $device,
                    'serialDevice' => $serialDevice
                ]
            );
            if ($visitors){
                echo "Terimakasih!, log diterima";
                // return redirect('kelolavendor')->with('Sukses','Berhasil menambahkan Vendor!');;
            }else{
                return Redirect::back()->with('message','Gagal, cek kembali !');
            }

        }else{
            $visitors = Visitor::create(
                [
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'purpose' => $request->purpose,
                    'vendor_id' => $request->vendor_id,
                    'useragent' => $agent,
                    'ipVisitor' => $ipVisitor,
                    'device' => $device,
                    'serialDevice' => $serialDevice
                ]
            );
    
            if ($visitors){
                echo "<script>
                alert('Terimakasih telah mengisi buku tamu');
                window.location.href='https://kpk.go.id';
                 </script>";
                // return redirect('kelolavendor')->with('Sukses','Berhasil menambahkan Vendor!');;
            }else{
                return Redirect::back()->with('message','Gagal, cek kembali !');
            }
        }

        
    }
}
