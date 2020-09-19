@extends('shop/layout.main')
@section('content')
    
  
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row" style="margin-top: 20px; margin-bottom:20px; ">
         @foreach ($products as $product)
          <!-- Product -->
          <div class="col-md-3 text-center">
            <div class="card">
          
              @php $i = 1;  @endphp
                

             
              @foreach($product->images as $image)
                @if($i>0)
                <!-- <img class="card-img-top" src="{{ asset('front/img/man/'.$image->image)}}" alt="Card image cap"> -->
                <img class="card-img-top" src="{{ asset('uploaded_img/products/'.$image->image)}}" alt="Card image cap">
                @endif
                @php $i --; @endphp
                  
                
              
              @endforeach

            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p class="card-text">BDT {{ $product->price }}</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
            </div>
          </div>
          <!-- Product -->
          @endforeach 
      </div>
    </div>
  </section>
  <!-- / Products section -->

@endsection