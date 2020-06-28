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
        <a href="#" class="btn btn-danger">Buy Now</a>
        <button type="button" class="btn btn-primary">Add to Cart</button>
        <p class="card-text"></p>
      </div>
    </div>
    <br></br>


    <div class="card-deck">

        <!-- PUT HERE FOREACH BLOCK -->
        @foreach ($products as $product )
        <div class="row justify-content-md-center">
        <div class="card">
          <img src="{{ $product ->imagePath }}" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title">{{ $product->title }}</h5>
           <p class="color">{{ $product->color }}</p>
           <a href="#" class="btn btn-danger">Buy Now</a>
           <button type="button" class="btn btn-primary float-right">Add to Cart</button>
           <div class="price">${{ $product->price }}
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
