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
                        <li class="breadcrumb-item"><a href="{{ route('portal.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Course</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="card-box mb-30">
        @if ($courses->isNotEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Duration </th>
                        <th scope="col">Course Date </th>
                        <th scope="col">Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th scope="row">{{ $user['course']['name'] }}</th>
                            <th scope="row">{{ $user['course']['duration'] }} Weeks</th>
                            <th scope="row"> {{ $user['course']['start_date'] }} </th>
                            <th scope="row"> <a href="#" class="btn btn-primary btn-sm">Join Now</a> </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="title">
                <h4>No Course Registered for yet?</h4>
            </div>
        @endif


    </div>
@endsection

@push('js')
    {{--  --}}
@endpush
