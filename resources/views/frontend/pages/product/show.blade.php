@extends('frontend.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-5">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('images/products/1600600555.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('images/products/1600600556.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('images/products/1600600685.png') }}" alt="Third slide">
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-7">
        <div class="widget">
          <h3>{{ $product->title }}</h3>

        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
