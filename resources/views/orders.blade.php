@extends('layouts.product')

@section('content')
    
            <!-- Header End -->
            <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Your Orders</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li>Orders</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3 class="cart-page-title text-center">Your cart items</h3>
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                               
                                                <th>Toal Items</th>
                                             
                                          
                                                <th>Total Price</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach ($carts as $cart)
                                       
                                           
                                            
                                            <tbody>
                                                <tr>
                                                <td class="product-name"><a href="#"></a>{{ $cart->totalQty }}</td>
                                                    
                                                
                                                <td class="product-subtotal">{{ $cart->totalPrice }}</td>
                                                    
                                                </tr>
                                               
                                            </tbody>   
                                        @endforeach

                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->
            <!-- Footer Area start -->
        
@endsection