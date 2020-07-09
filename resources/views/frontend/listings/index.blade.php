<!DOCTYPE html>
<html>
<head>
    <title>Dawei Directory</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/download.png')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/style.css')}}">
    <script type="text/javascript" src="{{asset('frontendtemplate/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script>

    <!-- For multiple select box -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

    <!-- For summernote -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row mt-5">	
			@foreach($listings as $listing)
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
	                <div class="card justify-content-center" style="width: 500px; height: auto;">
	  					<img src="{{asset($listing->photo)}}" class="card-img-top" alt="..." style="width: 500px; height: 200px;">
	  					<div class="card-body">
	  						<div class="row">
	  							<div class="col-lg-12">
	  								 <h2 class="card-title">{{$listing->name}}</h2>
	  							</div>
	  						</div><hr>
	    					<div class="row">
	    						<div class="col-lg-8">
	    							<h3>{{$listing->day}} Days</h3>
	    						</div>
	    						<div class="col-lg-4">
	    							<a href="{{route('listings.show',$listing->id)}}" class="btn btn-primary mt-5">
	    								Add Details
	    							</a>							    								
	    						</div>
	    					</div>
	  					</div>
					</div>
	            </div>
        	</div>
            @endforeach
		</div>
</body>
</html>