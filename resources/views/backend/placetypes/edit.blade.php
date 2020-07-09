@extends('backend.master')
@section('style')
	<!-- for DataTable -->
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h1 class="h3 mb-2 text-gray-800">Edit Placetype</h1>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 text-right">
		<a href="{{route('placetypes.index')}}">
			<button class="btn btn-outline-primary" id="backbtn">
				<i class="fas fa-backward"></i>
			</button>
		</a>
	</div>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Placetype Form</h6>	
	</div>
	<div class="card-body">
		<form action="{{route('placetypes.update',$placetypes->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="placetypeName" class="col-sm-2 col-form-label" >
					Name
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="placetypeName" placeholder="Enter Placetype Name" name="name" value="{{$placetypes->name}}">
				</div>
			</div>
			<div class="form-group row">
				
				<div class="col-sm-2">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-save"></i>Save
					</button>
				</div>
			</div>
		
	</form>
</div>
</div>

@endsection
