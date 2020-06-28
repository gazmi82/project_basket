@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
    @yield('styles')


<div class="container bootstrap snippet">
    <div class="col-md-9 col-sm-8 content">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="{{ route('home') }}">Home</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="https://bootdey.com/img/Content/user_3.jpg">
                            Matew darfkmoun
                        </h3>
                    </div>
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
                                    <td><img src="https://via.placeholder.com/400x200/" class="img-cart"></td>
                                    <td><strong>Product 2</strong><p>Size : M</p></td>
                                    <td>
                                    <form class="form-inline">
                                        <input class="form-control" type="text" value="2">
                                        <button class="btn btn-default" ><i class="fa fa-pencil"></i></button>
                                        <a href="#" class="btn btn-primary" rel="tooltip" ><i class="fa fa-trash-o"></i></a>
                                    </form>
                                    </td>
                                    <td>$16.00</td>
                                    <td>$32.00</td>
                                </tr>
                                <tr>
                                    <td colspan="6">&nbsp;</td>
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
                <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                <a href="#" class="btn btn-primary pull-right">Next<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>


@endsection