@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <div class="card">
        <div class="card-header pb-0">
          <h5>Input Vendor</h5>
        </div>
        
        <form class="form theme-form" action="{{'vendor/store'}}" method="POST">
          @csrf
          <div class="card-body">

            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nama Vendor</label>
                    <input class="form-control" type="text" name="name" placeholder="Nama Vendor...">
                  </div>
                </div>
              </div>


            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Alamat Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Email Vendor...">
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nomor Telpon</label>
                    <input class="form-control" type="number" name="phone_number" placeholder="Nomor Telpon...">
                  </div>
                </div>
              </div>


            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlSelect9">Pilih PIC</label>
                  <select name="pic_id" class="form-select digits" id="exampleFormControlSelect9">
                    <option selected="true" disabled="disabled">Silahkan Pilih PIC</option>
                    @foreach ($pic as $listPic )
                      
                    <option value="<?= $listPic->id ?>"><?= $listPic->name ?></option>
                    
                    @endforeach
               
                  </select>
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