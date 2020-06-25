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
    <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
<br></br>
    <div class="card-deck">
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/USD00AUS052A021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Audi</h5>
      <p class="card-text">2021 Audi Q3</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/USD10AUC311A021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Audi</h5>
      <p class="card-text">20201 Audi RS 7</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/usd00mbc682a021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mercedez-Benz</h5>
      <p class="card-text">2021 Mercedez-Benz E-Class</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<br></br>
<div class="card-deck">
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/USD00AUC016A021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Audi</h5>
      <p class="card-text">2021 Audi A4</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/USC80ALS011A021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Alfa Romeo Stelvio</h5>
      <p class="card-text">2020 Alfa Romeo Stelvio</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://www.cstatic-images.com/car-pictures/main/usc90mnc092b021001.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mini</h5>
      <p class="card-text">2020 Mini Hardtop</p>
      <a href="#" class="btn btn-danger">Buy</a>
      <button type="button" class="btn btn-success">Add to Cart</button>
      <button type="button" class="btn btn-link">Price</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    
</div>
@endsection
