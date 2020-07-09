@extends('frontend.master');
@section('content')
<div class="container">

@foreach($listings as $row)
	<div class="row justify-content-center mt-5">
		
		<div class="col-lg-12">
			<div class="shadow p-3 rounded">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{asset($row->photo)}}" class="card-img-top" style="width: 400px;" id="guid-card">
					</div>
					<div class="col-lg-6">
						<h2>{{$row->name}}</h2>

						<h3>Duration: {{$row->day}}</h3>
						<h3>Guide Name: {{$row->user->name}}</h3>
						<a href="" class="btn btn-primary">Details</a>
						
					</div>	
				</div>
			</div>
		</div>
	</div>

@endforeach
</div>
@endsection