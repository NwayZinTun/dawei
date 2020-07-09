@extends('backend.master')
@section('style')
	<!-- for DataTable -->
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h1 class="h3 mb-2 text-gray-800">Edit Places</h1>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 text-right">
		<a href="{{route('places.index')}}">
			<button class="btn btn-outline-primary" id="backbtn">
				<i class="fas fa-backward"></i>
			</button>
		</a>
	</div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Place Form</h6>	
	</div>
	<div class="card-body">
		
		<form action="{{route('places.update',$places->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="placetypeName" class="col-sm-2 col-form-label" >
					Placetype
				</label>
				<div class="col-sm-10">
					<select class="form-control" name="placetype">
					  <option selected>Choose Placetype</option>

					  @foreach($placetypes as $row)

					  	<option value="{{$row->id}}" @if($places->placetype_id == $row->id)
						{{'selected'}} @endif>
					  		{{$row->name}}
					  	</option>

					  @endforeach
					</select>
				</div>
			</div>
			 <div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Name
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$places->name}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Photo
				</label>
				<div class="col-sm-10">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#old" class="nav-link" data-toggle="tab">Old</a>
						</li>
						<li class="nav-item">
							<a href="#new" class="nav-link" data-toggle="tab">New</a>
						</li>
					</ul>
					<div class="tab-content my-2">
						<div class="tab-pane fade show active" id="old">
							<img src="{{asset($places->photo)}}" class="img-fluid w-25">
							<input type="hidden" name="oldphoto" value="{{$places->photo}}">
						</div>
						<div class="ta-pane fade" id="new">
							<input type="file" name="photo" accept="image/*">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Address
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter  address" name="address" id="address" value="{{$places->address}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="distance" >
					Distance
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Distance" name="distance" value="{{$places->distance}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Description
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$places->description}}">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2">

				</div>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-save"></i>Save
					</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection
