@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
  <div class="row">
    <div class="card">
        <div class="card-header pb-0">
          <h5>Edit Data Vendor</h5>
        </div>
        
        <form class="form theme-form" action="<?= URL::to('/'); ?>/kelolaVendor/update" method="POST">
          @csrf
          @method('PUT')
          <div class="card-body">
          @foreach ( $vendor as $v )
            
            <input type="hidden" value="{{$v->id}}" name="id">
            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nama Vendor</label>
                    <input class="form-control" type="text" name="name" placeholder="Nama Vendor..." value="{{$v->name}}">
                  </div>
                </div>
              </div>


            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Alamat Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Email Vendor..." value={{$v->email}}>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Nomor Telpon</label>
                    <input class="form-control" type="number" name="phone_number" placeholder="Nomor Telpon..." value="{{$v->phone_number}}">
                  </div>
                </div>
              </div>
            @endforeach

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlSelect9">Pilih PIC</label>
                  <select name="pic_id" required="" class="form-select digits" id="exampleFormControlSelect9">
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