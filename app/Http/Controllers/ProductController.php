<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\OrderCompleted;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function addToCart (Product $product) {
        if(session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
       // dd($cart);
        session()->put('cart' , $cart);
        return redirect()->route('welcome')->with('success' , 'product was added');


    }


    public function destroy(Product $product)
    {


        $cart = new Cart( session()->get('cart'));
        $cart->remove($product->id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was removed');
    }

    public function showCart() {

        if(session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
      //  dd($cart);
        return view('cart' , compact('cart'));
    }

    public function checkOut($amount) {

        return view('checkout' , compact('amount'));
    }

    public function charge(Request $request) {
       $stripe = Stripe::make('sk_test_Mm7vdIZ440xsvLQ1FB9tzjN600hhutebub');

        $charge =$stripe->charges()->create([
        'currency' => 'USD',
        'source' => $request->stripeToken,
        'amount' => $request->amount,
        'description' => 'test laravel app'
       ]);


       $chargId = $charge['id'];

       if($chargId) {
         $order= auth()->user()->orders()->create([
              'cart' => serialize(session()->get('cart'))
          ]);


          Mail::to($order->user)->queue(
            new OrderCompleted($order)
        );
        session()->forget('cart');


        return redirect()->route('welcome')->with('success' , 'payment was done thanks');

       } else {
        return redirect()->back();
       }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product updated');
    }

    public function single($id) {
        $singleProduct = Product::findOrFail($id);
        return view('single-product' , compact('singleProduct'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
}
