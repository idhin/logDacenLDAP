@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Total Pengunjung</h5><span>Data pengunjung Data Centre.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Asal Vendor</th>
                  <th>No Telp</th>
                  <th>Tujuan</th>
                  <th>Public IP</th>
                  <th>User Agent</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $visitor as $listVisitor )
                <tr>
                  <td><?= $listVisitor->name ?></td>
                  <td><?= $listVisitor->vendorName ?></td>
                  <td><?= $listVisitor->phone_number ?></td>
                  <td><?= $listVisitor->purpose ?></td>
                  <td><?= $listVisitor->ipVisitor ?></td>
                  <td><?= $listVisitor->useragent ?></td>
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