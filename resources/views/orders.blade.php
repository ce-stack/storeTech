@extends('layouts.app')

@section('content')
    
            <!-- Header End -->
            <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Wishlist Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Wishlist</li>
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
                    <h3 class="cart-page-title">Your cart items</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                             
                                          
                                                <th>price</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach ($carts as $cart)
                                            @foreach ($cart->items as $item)
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail" style="width:100px">
                                                    <a href="#"><img src="{{ $item['image'] }}" alt="" /></a>
                                                    </td>
                                                <td class="product-name"><a href="#"></a>{{ $item['title'] }}</td>
                                                    
                                                
                                                <td class="product-subtotal">{{ $item['price'] }}</td>
                                                    
                                                </tr>
                                               
                                            </tbody>                                                
                                            @endforeach
                                        @endforeach

                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->
            <!-- Footer Area start -->
        
@endsection