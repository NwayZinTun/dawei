@extends('frontend.master')

@section('content')


<div class="container mt-5">
	<div class="row mt-5 pagodas">
		@foreach($places_lists as $places_lists)
		<div class="col-xl-3 col-lg-3 col-md-6 mt-3">
			<div class="card">
  				<!-- <div class="box"> -->
  					<img src="{{asset($places_lists->photo)}}" class="card-img-top" alt="...">
  				<!-- </div> -->
				<div class="card-body">
					<h5 class="card-title">{{$places_lists->name}}</h5>
					<a href="{{route('details',$places_lists->id)}}" class="btn btn-primary">Details</a>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>

</div>

@endsection