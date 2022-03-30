@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Kelola Vendor</h5><span>Daftar Vendor yang Terdaftar.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Nama PIC</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($vendor as $listVendor )
                <tr>
                  <td><?= $listVendor->name; ?></td>
                  <td><?= $listVendor->email; ?></td>
                  <td><?= $listVendor->phone_number; ?></td>
                  <td><?= $listVendor->namaPic; ?></td>
                  <!-- <td>Active</td> -->
                  <td><a href="kelolavendor/edit/{{$listVendor->id}}"><input class="btn btn-square btn-primary-gradien" type="button"  data-bs-original-title="" title="" value="Edit" /></a><a href="kelolavendor/hapus/{{$listVendor->id}}"><input class="btn btn-square btn-danger-gradien" type="button"  data-bs-original-title="" title="" value="Hapus" /></a></td>
                </tr>

                @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
 @endsection