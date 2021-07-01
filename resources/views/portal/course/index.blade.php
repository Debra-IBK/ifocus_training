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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Course</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="card-box mb-30">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Duration </th>
                    <th scope="col">Payment Date </th>
                    <th scope="col">Actions </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th scope="row">1</th>
                    <th scope="row">1</th>
                    <th scope="row">1</th>
                    <th scope="row">1</th>
                </tr>
            </tbody>
        </table>

    </div>
@endsection

@push('js')

@endpush
