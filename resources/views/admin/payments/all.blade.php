@extends('layouts.portal')

@push('title')
    {{ 'Payments' }}
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
                        <li class="breadcrumb-item active" aria-current="page">Payments Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
         @if($payments->count())
         <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount Paid </th>
                        <th scope="col">Course </th>
                        <th scope="col">Status </th>
                        <th scope="col">Date </th>
                        <th scope="col">Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                 
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $payment['user']['full_name'] }}</td>
                        <td scope="row">${{ $payment['amount'] }}</th>
                        <td scope="row">{{ $payment['course']['name'] }}</td>
                        <td scope="row">{{ $payment['status'] }}</td>
                        <td scope="row">{{ $payment['updated_at']->format('D, M j, Y \a\t g:ia') }}</td>
                        <td scope="row"> 
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
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
