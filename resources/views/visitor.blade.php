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
                  <th>Waktu Berkunjung</th>
                  <th>Nama</th>
                  <th>Asal Vendor</th>
                  <th>No Telp</th>
                  <th>Tujuan</th>
                  <th>Public IP</th>
                  <th>User Agent</th>
                  <th>Nama PIC</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $visitor as $listVisitor )
                <tr>
                  <td><?= $listVisitor->created_at?></td>
                  <td><?= $listVisitor->name ?></td>
                  <td><?= $listVisitor->vendorName ?></td>
                  <td><?= $listVisitor->phone_number ?></td>
                  <td><?= $listVisitor->purpose ?></td>
                  <td><?= $listVisitor->ipVisitor ?></td>
                  <td><?= $listVisitor->useragent ?></td>
                  <td><?= $pic?></td>
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<script type="text/javascript"> 
    $(document).ready(function () {
        $('#basic-1').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>