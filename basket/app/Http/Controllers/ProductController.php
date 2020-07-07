<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Session;

class ProductController extends Controller

{
	/**
	*@return \Illuminate\Http\Response
	*/
    public function index()
    {
    	$products = Product::all();
    	return view('home', ['products'=> $products]);
    }

    public function getAddToCart(Request $request, $id) 
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        
    	$request->session()->put('cart', $cart);
    	return redirect()->route('shoppingCart');
    }

    public function getCart()
    {
    	if (!Session::has('cart')) {
    		return view('cart');
    	}
    	$oldCart = Session::get('cart');

    	$cart = new Cart($oldCart); 
    	return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Request
     */
   public function destroy(Request $request, $id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($id);
        $request->session()->put('cart', $cart);
        return redirect()->route('shoppingCart');

        
        //return response()->json(array( 'totalqty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice));
        //{"totalqty":0,"totalPrice":-222000}
    }

}


  

