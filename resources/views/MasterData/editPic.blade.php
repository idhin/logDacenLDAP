@extends('MasterData.template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <div class="card">
        <div class="card-header pb-0">
          <h5>Edit PIC</h5>
        </div>
        
        <form class="form theme-form" action="{{'/kelolapic/update'}}" method="POST">
          @csrf
          @method('PUT')
         
          <div class="card-body">
            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nama PIC</label>
                    @foreach ( $pic as $p )
                    <input type="hidden" value="{{$p->id}}" name="id">
                    <input class="form-control" type="text" name="name" placeholder="Nama PIC..." value="{{$p->name}}">
                    @endforeach
                  </div>
                </div>
              </div>
          </div>
          <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">Submit</button>
            <input class="btn btn-light" type="reset" value="Cancel">
          </div>
        </form>
      </div>
  </div>
 </div>
 @endsection