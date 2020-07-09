@extends ('backend.master')
@section('style')
	<!-- for DataTable -->
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section ('content')
<div class="row">
	<div class="col-lg-6 col-md-6">
		<h1 class="h3 mb-2 text-gray-800">Place Type</h1>
	</div>        
	<div class="col-lg-6 col-md-6 text-right">
		<a href="{{route('placetypes.create')}}">
			<button class="btn btn-outline-primary" id="addbtn">
				<i class="fas fa-plus"></i>
			</button>
		</a>
	</div>
</div>
<div class="card shadow mb-4">
  		<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary"> List</h6>
    	</div>
	    <div class="card-body">
	      <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Name</th>	             
	              <th>Action</th>          
	            </tr>
	          </thead>
	          <tfoot>
	            <tr>
	              <th>No</th>
	              <th>Name</th>	             
	              <th>Action</th>    
	            </tr>
	          </tfoot>
	          <tbody>
	          		@php $i=1; @endphp

				@foreach($placetypes as $row)
				<tr>
					<td>{{$i}}</td>
					<td>
						{{$row->name}}
					</td>
					<td>
						<a href="{{route('placetypes.edit',$row->id)}}" class="btn btn-warning" class="d-inline">Edit</a>
						
						<form method="POST" action="{{route('placetypes.destroy',$row->id)}}" onsubmit="return confirm('Are you sure want to delete?')" style="float: right;">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
							
						</form>
					</td>
				</tr>
				@php $i++; @endphp
				@endforeach
	          
				
	          	
	          </tbody>
	        </table>
	      </div>
	    </div>
  	</div>


@endsection
@section('script')
	<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection