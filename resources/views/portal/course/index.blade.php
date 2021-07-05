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
                        <th scope="col">Commencement Date </th>
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
                            {{-- <th scope="row"> <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#alert-modal" type="button">Join Class Now</a> </th> --}}
                            <th scope="row"> <a href="{{ route('portal.course.show', $user['course']['slug']) }}" class="btn btn-primary btn-sm" >Join Class Now</a> </th>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="title">
                <h4>No Course Registered for yet?  <a href="{{ route('portal.payment.create') }}" class="btn btn-primary btn-sm">Register Now</a></h4>
            </div>
        @endif


    </div>
    <div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content bg-danger text-white">
										<div class="modal-body text-center">
											<h3 class="text-white mb-15"><i class="micon icon-smile"></i> Hello</h3>
											<p>START DATE: AUGUST 2021</p>
											<button type="button" class="btn btn-light" data-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>
@endsection

@push('js')
    {{--  --}}
@endpush
