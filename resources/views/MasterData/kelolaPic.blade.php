@extends('MasterData.template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Kelola PIC</h5><span>Daftar PIC yang Terdaftar.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $pic as $listPic )
               
                 
                <tr>
                  <td><?= $listPic -> name ?></td>
                  <td>Active</td>
                  <td><a href="kelolapic/edit/{{$listPic->id}}"><input class="btn btn-square btn-primary-gradien" type="button"  data-bs-original-title="" title="" value="Edit" /></a><a href="kelolapic/hapus/{{$listPic->id}}"><input class="btn btn-square btn-danger-gradien" type="button"  data-bs-original-title="" title="" value="Hapus" /></a></td>
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