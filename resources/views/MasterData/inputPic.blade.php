@extends('MasterData.template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <div class="card">
        <div class="card-header pb-0">
          <h5>Register PIC</h5>
        </div>
        
        <form class="form theme-form" action="{{'/pic/store'}}" method="POST">
          @csrf
         
          <div class="card-body">
            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nama PIC</label>
                    <input class="form-control" type="text" name="name" placeholder="Nama PIC...">
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