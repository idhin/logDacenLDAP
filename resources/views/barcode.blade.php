@extends('MasterData.template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <div class="card">
        <div class="visible-print text-center">
            <br>
            <h5>Barcode untuk buku tamu</h5>
            <?php $url=URL::to('/logbook');; ?> 
            {!! QrCode::size(300)->generate($url); !!}
             
            <p><small><?= $url; ?></small></p>
        </div>
      </div>
  </div>
 </div>
 @endsection