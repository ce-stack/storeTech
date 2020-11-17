


@extends('layouts.product')
@section('content')
    

                            
                   
<section class="product-details-area mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-img product-details-tab">
                    <div class="zoompro-wrap zoompro-2">
                        <div class="zoompro-border zoompro-span">
                            <img class="" src="{{asset('assets/images/electronic')}}/{{ $singleProduct->image }}"  alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h2>{{ $singleProduct->title }}</h2>
                   
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">€ {{$singleProduct->price}}</li>
                        </ul>
                    </div>
                    
                    <div class="pro-details-list">
                        <ul>
                            <li>- Very modern style</li>
                        </ul>
                    </div>
                    <div class="pro-details-quality mt-0px">
                       
                        <div class="pro-details-cart btn-hover">
                            <a href="{{ route('cart.add' , $singleProduct->id) }}"> + Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="description-review-area mb-60px">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a data-toggle="tab" href="#des-details1">Description</a>
              
                <a class="active" data-toggle="tab" href="#des-details3">Reviews (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                
                <div id="des-details1" class="tab-pane">
                    <div class="product-description-wrapper">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <p>
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane active">
                    <div class="row">
                        <div class="col-lg-6">
                          <show-comment :product_id="{{ $singleProduct->id }}"></show-comment>
                        </div>
                        <div class="col-lg-6">
                            
                            @auth()
                                
                            <comment-section :product_id="{{ $singleProduct->id }}"></comment-section>
                            @else 
                            <a>login to comment</a>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @section('script')
  <script>

    const app = new Vue({
      el: '#app',
      data: {
        comments: {},
        commentBox: '',
        singleProduct: {!! $singleProduct->toJson() !!},
        user: {!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
      },
      mounted() {
        this.getComments();
      },
      methods: {
        getComments() {
          axios.get('/api/product/'+this.singleProduct.id+'/comments')
                .then((response) => {
                  this.comments = response.data
                })
                .catch(function (error) {
                  console.log(error);
                });
        },
        postComment() {
          axios.post('/api/posts/'+this.singleProduct.id+'/comment', {
            api_token: this.user.api_token,
            body: this.commentBox
          })
          .then((response) => {
            this.comments.unshift(response.data);
            this.commentBox = '';
          })
          .catch((error) => {
            console.log(error);
          })
        }
      }
    })

  </script>
@endsection --}}