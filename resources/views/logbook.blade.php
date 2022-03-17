
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <title>Buku Tamu Data Centre | DMI</title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
        
        <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
    
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css">
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
        <script type="text/javascript">
          function CheckVendor(val){
           var element=document.getElementById('vendor');
           if(val=='lainnya')
             element.style.display='block';
           else  
             element.style.display='none';
          }
          
          </script> 
      </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">              
            <div class="login-card">
              <form class="theme-form login-form" action="{{'logbook/store'}}" method="POST">
                @csrf
                <h4>Buku Tamu Data Centre</h4>
                <h6>Silahkan di isi.</h6>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <div class="input-group"><span class="input-group-text"><i class="fa fa-smile-o"></i></span>
                    <input class="form-control" type="text" name="name" required="" placeholder="Masukkan nama lengkap...">
                  </div>
                </div>

                <div class="form-group">
                    <label>No Telp</label>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span>
                      <input class="form-control" type="text" name="phone_number" required="" placeholder="Masukkan nomor telfon yang aktif...">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Asal Vendor</label>
                  <select name="vendor_id" class="form-select digits" id="exampleFormControlSelect9" onchange='CheckVendor(this.value);'>
                    <option value="*" selected="true" disabled>Pilih Asal Vendor</option>
                    @foreach ($vendor as $listVendor )
                      
                    
                    <option value="<?= $listVendor->id ?>"><?= $listVendor->name ?></option>
                    
                    @endforeach
                    <option value="lainnya">Vendor Lain</option>
                  </select>
                  </div>
                  
                  <div class="form-group" id ="vendor">
                    <label>Nama Vendor</label>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-users"></i></span>
                      <input  class="form-control" name="vendorName" type="text"  placeholder="Masukkan nama vendor...">
                    </div>
                    <br>
                    <label>No Telp Vendor</label>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span>
                      <input class="form-control" type="text" name="vendorPhone" placeholder="Masukkan nomor telfon vendor...">
                    </div>

                    <br>
                    <label>Email Vendor</label>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                      <input class="form-control" type="email" name="vendorMail" placeholder="Masukkan email vendor...">
                    </div>
                    <br>
                    <label>PIC</label>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-spin fa-spinner"></i></span>
                      <select name="pic_id" class="form-select digits" id="exampleFormControlSelect9">
                        <option selected="true" disabled="disabled">Silahkan Pilih PIC</option>
                        @foreach ($pic as $listPic )
                          
                        <option value="<?= $listPic->id ?>"><?= $listPic->name ?></option>
                        
                        @endforeach
                   
                      </select>
                    </div>
                  </div>

                  
                  {{-- <input id ="vendor" class="form-control" name="namaVendor" type="text" required="" placeholder="Masukkan nama vendor...">
                   --}}

                  <div class="form-group">
                    <label>Tujuan</label>
                    <textarea class="form-control" required="" name="purpose" id="exampleFormControlTextarea4" rows="3"></textarea>
                  </div>
                  
              
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      function CheckColors(val){
       var element=document.getElementById('color');
       if(val=='pick a color'||val=='others')
         element.style.display='block';
       else  
         element.style.display='none';
      }
      
      </script>
      
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>