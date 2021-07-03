@extends('layouts.portal')

@push('title')
    {{ 'Users' }}
@endpush
@push('css')
    <style>


    </style>
@endpush

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>USERS MANAGEMENT</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">All Users</h4>
                {{-- <p>Add class <code>.table</code></p> --}}
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary" rel="content-y" role="button">Add new user</a>
            </div>
        </div>
        @if($users->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email </th>
                            <th scope="col">Phone No. </th>
                            <th scope="col">Group</th>
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                    
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td scope="row">{{ $user['full_name'] }}</td>
                            <td scope="row">{{ $user['email'] }}</td>
                            <td scope="row">{{ $user['phone_no'] }}</td>
                            <td scope="row">{{ $user['user_group'] }}</td>
                            <td scope="row"> 
                                <div class="modal fade" id="Medium-modal{{ $user['uuid'] }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Details</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Name: {{ $user['full_name'] }}</p>
                                                <p>Email: {{ $user['email'] }}</p>
                                                <p>Phone No.: {{ $user['phone_no'] }}</p>
                                                <p>User Group: {{ $user['user_group'] }}</p>
                                                <p>Reg Date: {{ $user['created_at'] }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        {{-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> --}}
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Medium-modal{{ $user['uuid'] }}" type="button">
                                            <i class="dw dw-eye"></i>View
                                        </a>
                                        
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="title">
                <h4>No records</h4>
            </div>
        @endif

    
    </div>
@endsection

@push('js')
    {{--  --}}
@endpush
