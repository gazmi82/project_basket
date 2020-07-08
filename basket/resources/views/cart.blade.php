@extends('layouts.app')

@section('title')
 Cart
@endsection

@section('content')





@if(Session::has('cart'))

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

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
                            </tr>
                            </thead>

                            
                            <tbody>
                            	@foreach($products as $product)
                                <tr>
                                    <td><img src="{{ $product['item']['imagePath'] }}" class="img-cart"></td>
                                    <td><strong style="margin-top: 6px">{{ $product['item']['title'] }}</strong></td>
                                    <td>
                                    <div class="form-inline">
                                        <input class="form-control" type="text" value="{{ $product['qty'] }}" style="margin-right: 20px" >

                                        <form method="POST" action="{{ route('cart.destroy', ['id' => $product['item']['id']]) }}" > 
                                        	@csrf
                                        	{{ method_field('DELETE') }}
                                        	<input type="submit" value="Delete item" onclick="return confirm('Are you sure?')" class="btn btn-danger" />
                                            
                                        </form>
                                    </div>
                                    </td>
                                    <td>${{ $product['price'] }}</td>
                                </tr>
                                @endforeach
                                
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total: ${{ $totalPrice }}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                <a href="#" class="btn btn-primary pull-right">Proceed Checkout<span class="glyphicon glyphicon-chevron-right"></span></a>

                @else
             <div class="container">
				<div class="row">
				    <div class="col-ms6 col-md-6 col-md-offset-3 col-sm-offset-3">
				        <h2>No Items in Cart</h2>
				    </div>
				</div>
			</div>	

				@endif

            </div>
        </div>
    </div>
</div>
@endsection