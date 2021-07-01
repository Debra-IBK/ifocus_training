@extends('layouts.backend')

@section('css')
  
@endsection
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Users</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
           
            {{-- <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Striped table</h4>
                        <p>Add <code>.table  .table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                    </div>
                    <div class="pull-right">
                        <a href="#striped-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                    </div>
                </div> --}}
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <h4 class="text-blue h4">ALL USERS</h4>
                </div>
                <div class="pb-20">
                    <div class="table-responsive">
                    <table class="table data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="sdatatable-nosort">S/N</th>
                                <th>NAME</th>
                                <th class="datatable-nosort">EMAIL</th>
                                <th class="datatable-nosort">PHONE NO</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="table-plus">1</td>
                                <td>{{ $user['full_name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['phone_no'] }} </td>
                                <td><span class="badge badge-primary">Primary</span><span class="badge badge-primary">Primary</span><span class="badge badge-primary">Primary</span></td>
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

@section('js')
    <script src="{{ asset('backend/assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script> 

    <!-- buttons for Export datatable -->
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
	<!-- Datatable Setting js -->
	<script src="{{ asset('backend/assets/vendors/scripts/datatable-setting.js') }}"></script>
    
@endsection
