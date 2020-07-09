@extends('frontend.master')
@section('content')
<div class="container-fluid mt-4">
	<div class="row bg-white about">		 
		<div class="col-lg-6 col-md-12 col-sm-12 mt-3">
			<div class="row ml-5">
				<div class="col-lg-12">						 
					<div class="shadow-lg p-3 mb-5 bg-white rounded">
						<h3 class="text-center" style="width: 100%; text-align: center;">About Us</h3>
						<p class="para">
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</li>
							</ul>
							
						</p>
						<h3 class="text-center" style="width: 100%; text-align: center;">Future Plan 
						</h3>
						<p>
							tempor incididunt ut labore et dolore magnaa liqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="col-lg-12">
				<div class="row text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 mt-2">
						<img src="{{asset('frontendtemplate/images/logo.png')}}" class="about-img nav_logo mr-3"width="100%" height="300">
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection