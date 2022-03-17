@extends('MasterData/template')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid general-widget">
   <div class="row">
     {{-- <div class="col-sm-6 col-xl-3 col-lg-6">
       <div class="card o-hidden border-0">
         <div class="bg-primary b-r-4 card-body">
           <div class="media static-top-widget">
             <div class="align-self-center text-center"><i data-feather="database"></i></div>
             <div class="media-body"><span class="m-0">Total Agenda</span>
               <h4 class="mb-0 counter">116</h4><i class="icon-bg" data-feather="database"></i>
             </div>
           </div>
         </div>
       </div>   
     </div> --}}
     <div class="col-sm-6 col-xl-3 col-lg-6">
       <div class="card o-hidden border-0">
         <div class="bg-secondary b-r-4 card-body">
           <div class="media static-top-widget">
             <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
             <div class="media-body"><span class="m-0">Total Pengunjung</span>
               <h4 class="mb-0 counter"><?= $visitors ?></h4><i class="icon-bg" data-feather="shopping-bag"></i>
             </div>
           </div>
         </div>
       </div>
     </div> 
     <div class="col-sm-6 col-xl-3 col-lg-6">
       <div class="card o-hidden border-0">
         <div class="bg-primary b-r-4 card-body">
           <div class="media static-top-widget">
             <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
             <div class="media-body"><span class="m-0">Total PIC</span>
               <h4 class="mb-0 counter"><?= $pic ?></h4><i class="icon-bg" data-feather="message-circle"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-sm-6 col-xl-3 col-lg-6">
       <div class="card o-hidden border-0">
         <div class="bg-primary b-r-4 card-body">
           <div class="media static-top-widget">
             <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
             <div class="media-body"><span class="m-0">Total Vendor</span>
               <h4 class="mb-0 counter"><?= $vendor ?></h4><i class="icon-bg" data-feather="user-plus"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection