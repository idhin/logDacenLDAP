@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Kelola Akses</h5><span>Daftar User yang Terdaftar.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>ss</td>
                  <td>asasasas</td>
                  
                  <td>Active</td>
                  <td><button class="btn btn-square btn-primary-gradien" type="button" data-bs-original-title="" title="">Edit</button><button class="btn btn-square btn-danger-gradien" type="button" data-bs-original-title="" title="">Hapus</button></td>
                </tr>

               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
 @endsection