@extends('layouts.portal')

@push('title')
    {{ 'Courses' }}
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
                    <h4>Course List</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">All Courses</h4>
                {{-- <p>Add class <code>.table</code></p> --}}
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.courses.create') }}" class="btn btn-primary" rel="content-y" role="button">Add new course</a>
            </div>
        </div>
        @if($courses->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Cost </th>
                            <th scope="col">Duration </th>
                            {{-- <th scope="col">Start Date </th>
                            <th scope="col">End Date </th> --}}
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                    
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td scope="row">{{ $course['name'] }}</td>
                            <td scope="row">{{ $course['amount'] }}</td>
                            <td scope="row">{{ $course['duration'] }} weeks</td>
                            {{-- <td scope="row">{{date('D, M j, Y',strtotime($course['start_date'])) }}</td>
                            <td scope="row">{{date('D, M j, Y',strtotime($course['end_date'])) }}</td> --}}
                            <td scope="row"> 
                            
                                <div class="modal fade" id="Medium-modal{{ $course['slug'] }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">{{ $course['name'] }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cost: {{ $course['amount'] }}</p>
                                                <p>Duration:{{ $course['duration'] }} weeks </p>
                                                <p>Start Date: {{date('D, M j, Y',strtotime($course['start_date'])) }}</p>
                                                <p>End Start: {{date('D, M j, Y',strtotime($course['end_date'])) }}</p>
                                                {{-- <p>payment_exp_date</p> --}}
                                                <p>Zoom Link:<br> <font size="1">{{ $course['zoom_link'] }} </font></p>
                                                <p>Meeting ID: {{ $course['meeting_id'] }}</p>
                                                <p>Passcode: {{ $course['passcode'] }}</p>
                                                <p>Created by:{{ $course['user']['full_name'] }}</p>
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
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Medium-modal{{ $course['slug'] }}" type="button">
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
