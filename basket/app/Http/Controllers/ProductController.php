<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller

{
	/**
	*@return \Illuminate\Http\Response
	*/
    public function index()
    {
    	$products = Product::inRandomorder()->take(3)->get();
    	return view('home')->with('products', $products);
    }

    public function getAddToCart(Request $request, $id) 
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('home');
    }

    public function getCart()
    {
    	if (!Session::has('cart')) {
    		return view('cart1');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('cart1', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
