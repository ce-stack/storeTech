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

    // public function medicalIndex()
    // {
    //     if ( session('success'))
    //     {
    //         toast(session('success'), 'success');
    //     }
    //     $allProducts = Product::latest()->take(8)->get();
    //     $medicalProducts = MedicalProducts::latest()->take(8)->get();
    //     $furnitrueProducts = FurnitrueProducts::latest()->take(8)->get();
    //     return view('medical' , compact('medicalProducts' , 'allProducts' , 'furnitrueProducts'));
    // }



    // public function furnitrueIndex()
    // {
    //     if ( session('success'))
    //     {
    //         toast(session('success'), 'success');
    //     }
    //     $allProducts = Product::latest()->take(8)->get();
    //     $medicalProducts = MedicalProducts::latest()->take(8)->get();
    //     $furnitrueProducts = FurnitrueProducts::latest()->take(8)->get();
    //     return view('furnitrue' , compact('furnitrueProducts', 'medicalProducts' , 'allProducts'));
    // }
}
