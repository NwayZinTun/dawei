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
    <!-- <script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script> -->
</head>
<body>
<!-- For nav -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light mb-5">
        <a class="navbar-brand" href="#">
            <img src="{{asset('frontendtemplate/images/logo.png')}}" class="nav_logo mr-3"width="40" height="40" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{'mydawei'}}">My Dawei</a>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu">
                            @foreach($places as $place)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('places_lists',$place->id)}}">{{$place->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                </li>
                 <li class="nav-item mr-3">
                    <a class="nav-link" href="{{'ticketshop'}}">Tickets Service</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{'guide'}}">Local Guides</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{'about'}}">About</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{'contact'}}">Contact</a>
                </li>               
                <li class="nav-item"><a class="nav-link" href="{{'login'}}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{'register'}}">SignUp</a></li>
            </ul>
        </div>
    </nav>
<!-- End of nav -->

@yield('content')

    <footer class="footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-4 mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30549.077493962104!2d96.12108522324827!3d16.844469550365137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1594092911121!5m2!1sen!2smm"  frameborder="0" style="border:0; width: 200px; height: 150px;" allowfullscreen="" aria-hidden="false" tabindex="0" class="responsive-iframe"></iframe>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-2 mt-5">
                    <h6 style="text-transform: uppercase; font-weight: bold;"> Popular Festivals </h6>
                    <div class="mt-3 links">
                        <a href="">Shwe Taung Zar</a><br>
                        <a href="">Shin Koe Shin</a><br>
                        <a href="">Myaw Yit Pagoda</a><br>
                        <a href="">Maungmagan</a><br>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3 mt-5">
                    <h6 style="text-transform: uppercase; font-weight: bold;"> Get In Touch With Us </h6>
                    <p class="mt-3">Have any question?Let us know in store at 8th floor (A), InnSein St, Hlaing Township, call us on (+95) 422 192 677</p>
                    <a href=""><i class="fab fa-facebook p-2"></i></a>
                    <a href=""><i class="fab fa-instagram p-2"></i></a>
                    <a href=""><i class="fab fa-github p-2" aria-hidden="true"></i></a>   
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3 mt-5">
                    <h6 style="text-transform: uppercase; font-weight: bold;"> Newsletter </h6>
                    <form class="mt-3">
                        <div class="form-group" class="mt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted" placeholder="Email">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-light"> Subscribe </button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-12 text-center">
                    <p>Copyright @ 2020</p>
                </div>
            </div>
        </div>
    </footer>
<!-- End of Footer -->
</body>
</html>