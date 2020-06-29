@extends('layouts.app')

@section('title')
 Cart
@endsection

@section('content')

@if(Session::has('cart'))
<div class="container">
<div class="row">
    <div class="col-ms6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
            @foreach($products as $product)
               <li class="list-group-item">
                   <span class="badge badge-dark">{{ $product['qty'] }}</span>
                   <br><br>
                   <strong>{{ $product['item']['title'] }}</strong>
                   <span class="label label-success border border-danger" style="margin-left: 40px">${{ $product['price'] }}</span>
                   <br></br>
                   <div class="btn-group">
                    <a href="#" class="btn btn-primary">Delete 1 item</a>
                    <a href="#" class="btn btn-primary">Delete all items</a>
                   </div>
               </li>
            @endforeach
        </ul>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-ms6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total: ${{ $totalPrice }}</strong>
    </div>
</div>

<div class="row">
    <div class="col-ms6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <button type="button" class="btn btn-success">Checkout</button>
    </div>
</div>
</div>
@else

<div class="row">
    <div class="col-ms6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No Items in Cart</h2>
    </div>
</div>

@endif


@endsection





<!--<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
    @yield('styles')


<div class="container bootstrap snippet">
    <div class="col-md-9 col-sm-8 content">

        
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://via.placeholder.com/400x200/" class="img-cart"></td>
                                    <td><strong>Product 1</strong><p>Size : 26</p></td>
                                    <td>
                                    <form class="form-inline">
                                        <input class="form-control" type="text" value="1">
                                        <button rel="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                    </form>
                                    </td>
                                    <td>$54.00</td>
                                    <td>$54.00</td>
                                </tr>
                                
                                
                                <tr>
                                    <td colspan="4" class="text-right">Total Product</td>
                                    <td>$86.00</td>
                                </tr>
                                
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total</strong></td>
                                    <td>$88.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                <a href="#" class="btn btn-primary pull-right">Proceed Checkout<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>-->