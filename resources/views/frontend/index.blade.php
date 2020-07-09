@extends('frontend.master')

@section('content')
<!-- For Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontendtemplate/images/carousel1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendtemplate/images/carousel2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendtemplate/images/carousel9.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>
<!-- End of Carousel -->
  <!-- <div class="container bg mt-5 responsive">
    <h1 class="text-center">Popular Categries</h1>
    <div class="row justify-content-center"> 
      <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fas fa-vihara fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2"> Pagodas </h3>
            </div>
        </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fas fa-umbrella-beach fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2"> Beaches </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fas fa-water fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2"> Waterfalls </h3>
            </div>
        </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fa fa-bed fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2">Hotels</h3>
            </div>
        </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fas fa-utensils fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2">Restaurantes</h3>
            </div>
        </div>
        </a>
      </div>
       <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fa fa-bed fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2">Hotels</h3>
            </div>
        </div>
        </a>
      </div>
       <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fa fa-bed fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2">Hotels</h3>
            </div>
        </div>
        </a>
      </div>
       <div class="col-lg-2 col-md-2 col-sm-6 mr-5 mt-3 categories">
        <a href="" style="text-decoration: none;">
          <div class="row">
            <div class="col-lg-4">
                <span class="fa-stack fa-2x">
                <i class="fa fa-bed fa-stack-1x fa-inverse" style="color: #000;"></i>
              </span>
            </div>
            <div class="col-lg-8">
              <h3 class="mt-3 ml-2">Hotels</h3>
            </div>
        </div>
        </a>
      </div>
    </div>
  </div> -->

<!-- Popular Places Section -->
<div class="container">
  <h1 class="heading_one mt-5"> Popular Places </h1>
  <div class="row mt-3 mb-5">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/shwe-taung-sar-pagoda1.jpg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title"> Shwe Taung Zar Pagoda </p>
          <div class="overlay"></div>
        </div>
      </a>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/shin_mok_htee.jpg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title"> Shin Koe Shin Pagodas </p>
          <div class="overlay"></div>
        </div>
      </a>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/myaw_yit_pagoda2.jpg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title"> Myaw Yit Pagoda </p>
          <div class="overlay"></div>
        </div>
      </a>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/shwe_thaylaung_pagoda.jpg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title">ShweThaylaung Pagoda</p>
          <div class="overlay"></div>
        </div>
      </a>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
     <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/maungmagan_beach.jpg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title"> Maungmagan Beach </p>
          <div class="overlay"></div>
        </div>
     </a>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <a href="">
        <div class="container1">
          <img src="{{asset('frontendtemplate/images/bamboogarden2.jpeg')}}" class="hoverImages" alt="ls-sample4"/>
          <p class="title"> Bamboo Garden Restaurant </p>
          <div class="overlay"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- End of Popular Places Sectioon -->

<!-- Foods -->
<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <div class="container-fluid foods">
    <div class="container">
      <h2 class="text-center" style="padding-top: 20px;">Traditional Delious Foods </h2>
      <img src="{{asset('frontendtemplate/images/moke_hen_khar.jpg')}}" style="width: 270px; height: 200px;" class="mt-4 mb-4">
      <img src="{{asset('frontendtemplate/images/moke_let_thoke.jpg')}}" style="width: 270px; height: 200px;" class="mt-4 mb-4">
      <img src="{{asset('frontendtemplate/images/moke_pyar.jpg')}}" style="width: 270px; height: 200px;" class="mt-4 mb-4">
      <img src="{{asset('frontendtemplate/images/thanat_thoke.jpg')}}" style="width: 270px; height: 200px;" class="mt-4 mb-4">
    </div>
  </div>
</div>
<!-- End of Food Section -->

<!-- Advertisements Section -->
<div class="container">
  <h1 class="heading_one mt-5"> Recommended Hotels </h1>
  <hr class="horizontal">
  <div class="row mt-3">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">      
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/hotel_dawei2.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>Dawei Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption>
        <a href="http://www.hoteldawei.com"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/mandolis_hotel1.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>The Mandolis <br>Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption>
        <a href="https://mandolishoteldawei.com/en/"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/zayar_htet_san.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>ZayarHtetSan Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption>
        <a href="https://www.facebook.com/pages/category/Hotel/Hotel-Zayar-Htet-San-110607783816261/"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/new_power_hotel.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>New Power Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption><a href="https://www.facebook.com/NewPowerHotelDaweiCity/"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/diamond_crown_hotel1.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>Diamond Crown <br>Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption>
        <a href="https://www.facebook.com/diamondcrownhoteldawei/?rf=170860189758560"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/royal_dawei_hotel1.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>Royal Dawei <br>Hotel</h3>
          <!-- <h5>Details</h5> -->
        </figcaption><a href="https://www.facebook.com/RoyalDaweiH/"></a>
      </figure>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">      
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/relax_guest_house1.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>Relax GuestHouse</h3>
          <h5>Deteails</h5>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/999_fashion_store.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>999 Store</h3>
          <h5>Details</h5>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3">
      <figure class="snip1584"><img src="{{asset('frontendtemplate/images/diamond_crown_hotel.jpeg')}}" class="hoverImages"/>
        <figcaption>
          <h3>Diamond Crown<br>Hotel</h3>
          <h5>Details</h5>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>
  </div> -->
</div>
<!-- End of Advertisements Section -->
@endsection