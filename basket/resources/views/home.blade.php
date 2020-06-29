  @extends('layouts.app')

  @section('title')
  Home
  @endsection

  @section('content')
  <div class="container">
    <div class="card bg-dark text-white">
      <img src="https://www.cars.com/cldstatic/ads/creative/20200316_4876_Nissan_Hero_2400x753.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title">2020 Nissan Rogue</h5>
        <p class="card-text"></p>
       
      </div>
    </div>
    <br></br>


    <div class="card-deck">

        <!-- PUT HERE FOREACH BLOCK -->
        @foreach ($products as $product )
        <div class="card mb-4">

        <div class="row justify-content-md-center">
          <img src="{{ $product->imagePath }}" class="card-img-top" style="width: 85%" alt="...">
          <div class="card-body">
           <h5 class="card-title" style="margin-left: 16px">{{ $product->title }}</h5>
           <p class="color" style="margin-left: 16px">{{ $product->color }}</p>
           <a href="#" class="btn btn-danger" style="margin-left: 16px">Buy Now</a>
           <a class="btn btn-primary " style="margin-right: 16px" href="{{ route('product.addToCart', ['id' => $product->id]) }}">Add to Cart</a>
           <div class="price" style="margin-left: 16px">${{ $product->price }}
           </div>
          </div>
         </div>
       </div>
       @endforeach

     
   </div>
   <div class="card-deck">

        <!-- PUT HERE FOREACH BLOCK -->
        @foreach ($products as $product )
        <div class="card mb-4">

        <div class="row justify-content-md-center">
          <img src="{{ $product->imagePath }}" class="card-img-top" style="width: 85%" alt="...">
          <div class="card-body">
           <h5 class="card-title" style="margin-left: 16px">{{ $product->title }}</h5>
           <p class="color" style="margin-left: 16px">{{ $product->color }}</p>
           <a href="#" class="btn btn-danger" style="margin-left: 16px">Buy Now</a>
           <a class="btn btn-primary " style="margin-right: 16px" href="{{ route('product.addToCart', ['id' => $product->id]) }}">Add to Cart</a>
           <div class="price" style="margin-left: 16px">${{ $product->price }}
           </div>
          </div>
         </div>
       </div>
       @endforeach
       
     
   </div>
 </div>
</div>
</div>

</div>

@endsection
