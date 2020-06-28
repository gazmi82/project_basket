<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
	/**
	*@return \Illuminate\Http\Response
	*/
    public function index()
    {
    	$products = Product::inRandomorder()->take(9)->get();
    	return view('home')->with('products', $products);
    }
}
