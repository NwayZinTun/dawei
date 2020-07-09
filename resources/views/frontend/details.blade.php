<!-- by KWT -->
@extends('frontend.master')

@section('content')
<div class="container mt-5">
	<div class="row">
		<!-- <div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<img src="{{asset($place_details->photo)}}" style="width: 100%; height: 300px;">
		</div> -->
		<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
			<img src="{{asset($place_details->photo)}}" style="width: 100%; height: 350px;">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
			<h3 class="h3 mb-2 text-gray-800">Profile</h3>
			<div class="shadow p-3 mb-5 bg-white rounded">
				<p>
					{{$place_details->description}}
				</p>
				<p>{{$place_details->name}}</p>
			<p>phone no</p>
			<p>email</p>
			<a href="">visit website</a>
			</div>
		</div>
	</div>
</div>
@endsection