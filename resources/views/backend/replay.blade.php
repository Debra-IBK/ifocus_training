@extends('layouts.backend')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/src/plugins/plyr/dist/plyr.css') }}">
@endsection
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Training Replay</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Training Replay</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Week 1</h4>
                        <p class="font-14 ml-0">Title </p>
                    </div>
                </div>
                <div class="container">
                    <video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg?v1" controls crossorigin>
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
                    </video>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('backend/assets/src/plugins/plyr/dist/plyr.js') }}"></script>
	<script src="{{ asset('backend/assets/https://cdn.shr.one/1.0.1/shr.js') }}"></script>
	<script>
		plyr.setup({
			tooltips: {
				controls: !0
			},
		});
	</script>
@endsection