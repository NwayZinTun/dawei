<!-- by KWT -->
@extends('frontend.master')
@section('content')
<div class="container-fluid">	
	<div class="row p-3">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="h3 text-gray-800 ml-5 text-center" style="margin-top: 100px; margin-bottom: 20px;">car and airLine ticket shops</h1>
		</div>	
		@foreach($ticketshop as $row)
		<div class="col-lg-4 col-md-6 col-sm-12 mb-5">				
			<div class="card text-white bg-white" style="width: 100%; height: 100px;">
				<div class="shadow p-3 bg-white rounded">
					<a href="{{$row->address}}">
						<img class="card-img-top" src="{{$row->photo}}" style="width: 100%; height: 100px;" title="{{$row->email}}">
					</a>
				</div>
			</div>
		</div>	
		@endforeach	 		
	</div>
</div>
@endsection