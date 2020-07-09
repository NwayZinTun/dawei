@extends('frontend.master')

@section('content')
<section id="contact" class="contact section-bg">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title mt-5">
        <h1 class="contact_head">Contact <hr></h1>
    </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h3>Our Address</h3>
              <p>Room No. 8-A , MTP Condo, Insein Rd, Yangon</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
             <i class="fa fa-phone-square" aria-hidden="true"></i>
              <h3>Call Us</h3>
              <p>09123978634</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15274.489725604115!2d96.12105613906233!3d16.845076883426866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1594054025575!5m2!1sen!2smm" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe>
          </div>

          <div class="col-lg-6">
          	<div class="shadow p-3 mb-5 bg-white rounded">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center mt-5 mb-3"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
      </div>
        </div>

  </div>
</section>
@endsection