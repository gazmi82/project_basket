<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Session;
use Stripe\Charge;
use Stripe\Stripe;



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

    }

    public function getCheckout() 
    {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        \Stripe\Stripe::setMaxNetworkRetries(2);
        $curl = new \Stripe\HttpClient\CurlClient([CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1]);
        $curl->setEnableHttp2(false);
        \Stripe\ApiRequestor::setHttpClient($curl);


        if (!Session::has('cart')) {
            return redirect()->route('shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);



        Stripe::setApiKey('sk_test_0in6WtydZdg3pICbYVgGXCU300E8efjUPM');
        try {
            Charge::create(array(
            "amount" => $cart->totalPrice * 100,
            "currency" => "usd",
            "source" => $request->input('stripeToken'), // obtained with Stripe.js
            "description" => "My First Test Charge"
        ));

       } catch (\Exeption $e) {
           return redirect()->route('checkout')->with('error', $e->getMessage());
       }

       Session::forget('cart');
       return redirect()->route('home')->with('succes', 'Successfully purchaised!');
    }

}


  

