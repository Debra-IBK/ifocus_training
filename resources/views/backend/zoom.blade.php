 @extends('layouts.portal')

 @section('content')
     <div class="main-container">
         <div class="pd-ltr-20 xs-pd-20-10">
             <div class="min-height-200px">
                 <div class="page-header">
                     <div class="row">
                         <div class="col-md-12 col-sm-12">
                             <div class="title">
                                 <h4>ZOOM</h4>
                             </div>
                             <nav aria-label="breadcrumb" role="navigation">
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Zoom</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <div class="row clearfix">
                     <div class="col-md-4 col-sm-12 mb-30">
                         <div class="card text-white bg-primary card-box">
                             <div class="card-header">JOIN ZOOM MEETING</div>
                             <div class="card-body">
                                 <h5 class="card-title text-white"></h5>
                                 <p class="card-text"><a href="{{ route('portal.join-zoom') }}">CLICK HERE TO JOIN
                                         MEETING</a></p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
     </div>


 @endsection
