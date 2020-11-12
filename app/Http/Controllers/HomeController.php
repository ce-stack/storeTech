<?php

namespace App\Http\Controllers;

use App\DigitalProducts;

use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( session('success'))
        {
            toast(session('success'), 'success');
        }
        $allProducts = Product::latest()->take(5)->get();
      
        return view('welcome' , compact('allProducts'));
    }

    
}
