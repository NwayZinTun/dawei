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
			<div class="col-lg-4">
                <div class="row">
                    <img src="{{asset($listing->photo)}}" class="card-img-top" alt="...">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h1>{{$listing->day}} Days</h1>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-primary mt-5">
                            Save
                        </button>
                    </div>
                </div>
            </div>
		</div>
	</div>

    <!-- <script type="text/javascript">
        $(document).ready(function(){
            $id = '{{$listing->day}}';
            var j=1;
            
            alert($places);
            var myfieldset = ``;
            myfieldset += `
            <fieldset class="border p-3 c-${j}" >
                <legend>Day ${j} </legend>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Places</label>
                    <div class="col-sm-10">
                        <select class="selectpicker mb-5" data-live-search="true" multiple>
                    

                            @foreach($places as $places)
                                <option data-tokens="ketchup mustard">jhk</option>
                            @endforeach
                    
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <div class="summernote"><p>Hello Summernote</p></div>
                    </div>
                </div>
            </fieldset>
            `;
            while($id > 0){

                $('#fieldsetgroup').append(myfieldset);
                $id--;
            }
            $('.summernote').summernote();
        });
    </script> -->
</body>
</html>