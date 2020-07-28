  @extends('layouts.app')

  @section('title')
  Home
  @endsection

  @section('content')
  <div class="container" style="max-width: 65%" >
    <div class="card bg-dark text-white">
      <img src="https://www.cars.com/cldstatic/ads/creative/20200316_4876_Nissan_Hero_2400x753.jpg" class="card-img" alt="">
      <div class="card-img-overlay">
        <h5 class="card-title">2020 Nissan Rogue</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <br>
    @if(Session::has('success'))
    <div class="row">
      <div class="col-md-4" >
        <div id="charge-message" class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="card-deck">
        @foreach ($products as $product )
        <div class="col-md-4">
          <div class="card mb-4">
            <img
                src="{{ $product->imagePath }}" 
                class="card-img-top" style="width: 90%" 
                alt="...">
                <div class="card-body">
                  <h5 
                    class="card-title" 
                    style="margin-left: 16px">
                    {{ $product->title }}
                  </h5>
                   <p 
                    class="color" 
                    style="margin-left: 16px">
                    {{ $product->color }}
                  </p>
                   <a 
                    href="{{ route('checkout') }}" 
                    class="btn btn-danger" 
                    style="margin-left: 16px">

                   Buy Now

                 </a>
                   <a 
                    class="btn btn-success " 
                    style="margin-right: 16px" 
                    href="{{ route('addToCart', ['id' => $product->id]) }}">

                  Add to Cart

                </a>
                <div 
                    class="price" 
                    style="margin-left: 16px">

                    ${{ $product->price }}

                </div>
                </div>
                 <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>
           </div>

           @endforeach
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

@section('style')

<style type="text/css">
  
</style>

@endsection


@endsection
