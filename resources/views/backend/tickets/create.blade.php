@extends('backend.master')
@section('style')
	<!-- for DataTable -->
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h1 class="h3 mb-2 text-gray-800">Create Ticket</h1>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 text-right">
		<a href="{{route('tickets.index')}}">
			<button class="btn btn-outline-primary" id="backbtn">
				<i class="fas fa-backward"></i>
			</button>
		</a>
	</div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Ticket Form</h6>	
	</div>
	<div class="card-body">
		
		<form action="{{route('tickets.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			 <div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Name
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Name" name="name">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label" >
					Photo
				</label>
				<div class="col-sm-10">
					<input type="file" name="photo" accept="image/*">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Email
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter  address" name="email">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" >
					Address
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Distance" name="address">
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
