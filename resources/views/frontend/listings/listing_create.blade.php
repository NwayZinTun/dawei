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

  <div class="container mt-5">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
      <h1 class="text-center">Welcome! Create your own listings</h1>
      <form action="{{route('listings.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mt-5">
          <label for="" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Cover Photo</label>
          <div class="col-sm-10">
            <input type="file" name="photo" accept="image/*">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Duration</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="duration" id="duration"  min="1" max="100" placeholder="Choose number of days">
          </div>
        </div>
        
          <!-- <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Places</label>
            <div class="col-sm-10">
              <select class="selectpicker" data-live-search="true" multiple>
                @foreach($places as $places)
                <option data-tokens="ketchup mustard">{{$places->name}}</option>
                @endforeach
              </select>
            </div>
          </div> -->
          <!-- <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
              <div id="summernote"><p>Hello Summernote</p></div>
            </div>
          </div> -->
       
        <!-- <div id="fieldsetgroup">
          
        </div> -->

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
 <!--  <script type="text/javascript">
    
    $(document).ready(function() {

      var j=1;

      $("#duration").on("change",function(event){
      $id = document.getElementById('duration').value;

      var myfieldset = ``;
      myfieldset += `
        <fieldset class="border p-3 c-${j}" >
          <legend>Day ${j} </legend>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Places</label>
            <div class="col-sm-10">
              <select>
                <option>hj</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
              <div id="summernote"><p>Hello Summernote</p></div>
            </div>
          </div>
        </fieldset>
      `;
      $('#fieldsetgroup').append(myfieldset);
      j++;
    });
      
      $('#summernote').summernote();
  });
  </script> -->
</body>
</html>