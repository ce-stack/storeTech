@extends('layouts.product')

@section('style')
<style>
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }


</style>
@endsection

@section('content')


            <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Checkout Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- checkout area start -->
            <div class="checkout-area mt-60px mb-40px">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-product-info">

                                        <div class="your-order-total">
                                            <ul>
                                                <li class="order-total">Total</li>
                                            <li>{{ $amount }}</li>
                                            </ul>

                                        </div>

                                    </div>
                                    <form action="/charge" method="post" id="payment-form">
                                        @csrf
                                        <div class="">
                                        <input type="hidden" name="amount" value="{{ $amount }}">
                                          <label for="card-element">
                                            Credit or debit card
                                          </label>
                                          <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                          </div>

                                          <!-- Used to display Element errors. -->
                                          <div id="card-errors" role="alert"></div>

                                        </div>

                                        <button class="btn btn-success mt-2">Submit Payment test with (4242 -4242 - 4242 4242 44-22 222 22)</button>
                                        <p id="loading" style="display:none;">please wait payment is in progress</p>
                                      </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout area end -->
            @endsection

            @section('script')
            <script src="https://js.stripe.com/v3/"></script>
            <script>
                window.onload = function() {
                        var stripe = Stripe('pk_test_98zIbRccvJg2WQgiDmIYYTNf002NoCSEjl');
                        var elements = stripe.elements();
                        var style = {
                            base: {
                                color: '#32325d',
                                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                fontSmoothing: 'antialiased',
                                fontSize: '16px',
                                '::placeholder': {
                                    color: '#aab7c4'
                                }
                            },
                            invalid: {
                                color: '#fa755a',
                                iconColor: '#fa755a'
                            }
                        };
                        var card = elements.create('card', {
                            style: style
                        });
                        card.mount('#card-element');
                        // Handle real-time validation errors from the card Element.
                        card.addEventListener('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                                displayError.textContent = event.error.message;
                            } else {
                                displayError.textContent = '';
                            }
                        });
                        // Handle form submission.
                        var form = document.getElementById('payment-form');
                        form.addEventListener('submit', function(event) {
                            event.preventDefault();
                            stripe.createToken(card).then(function(result) {
                                if (result.error) {
                                    // Inform the user if there was an error.
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;
                                } else {
                                    // Send the token to your server.
                                    stripeTokenHandler(result.token);
                                }
                            });
                        });
                        function stripeTokenHandler(token) {
                            // Insert the token ID into the form so it gets submitted to the server
                            var form = document.getElementById('payment-form');
                            var hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'stripeToken');
                            hiddenInput.setAttribute('value', token.id);
                            form.appendChild(hiddenInput);
                            // Submit the form
                            var loading = document.getElementById('loading')
                            loading.style.display = "block";
                            form.submit();
                        }
                    }
            </script>
            @endsection
