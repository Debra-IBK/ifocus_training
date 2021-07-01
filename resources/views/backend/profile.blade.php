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
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-50-p">
                        <div class="profile-photo">
                            <img src="{{ asset('backend/assets/img/user.png') }}" alt="" class="avatar-photo">
                        </div>
                        <h5 class="text-center h5 mb-0">{{ auth()->user()->full_name }}</h5>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ auth()->user()->email }}
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    {{ auth()->user()->phone_no }}
                                </li>
                                <li>
                                    <span>Course</span>
                                    America
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
      
    </div>
</div>
@endsection

@section('js')
   
@endsection
