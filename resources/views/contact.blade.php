@extends('templates.main')
@section('title') Contact Developer @endsection
@section('content')

    <div class="templateux-cover" style="background-image: url(images/slider-1.jpg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h6 data-aos="fade-up">Contact us</h6>
            <h1 class="heading mb-3" data-aos="fade-up"> Say hi!, Get in touch with us.</h1>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <form action="#" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-7 block-map-1" id="map"></div>
        </div> <!-- .row -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon small mb-3"><span class="ion-ios-location-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Arthur Bldg flr, New York City, USA</h3>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon small mb-3"><span class="ion-ios-telephone-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">+1 209 923 2302</h3>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon small mb-3"><span class="ion-ios-email-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">info@templateux.com</h3>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->

    @endsection
