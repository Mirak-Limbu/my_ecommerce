@extends('frontend.layouts.master')
@section('component')
<main class="main">
    <div class="intro-slider-container">
        <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
            <div class="intro-slide" style="background-image: url(frontend/assets/images/demos/demo-2/slider/slide-1.jpg);">
                <div class="container intro-content">
                    <h3 class="intro-subtitle">Bedroom Furniture</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title">Find Comfort <br>That Suits You.</h1><!-- End .intro-title -->

                    <a href="category.html" class="btn btn-primary">
                        <span>Shop Now</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide" style="background-image: url(frontend/assets/images/demos/demo-2/slider/slide-2.jpg);">
                <div class="container intro-content">
                    <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1><!-- End .intro-title -->

                    <a href="category.html" class="btn btn-primary">
                        <span>Shop Now</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide" style="background-image: url(frontend/assets/images/demos/demo-2/slider/slide-3.jpg);">
                <div class="container intro-content">
                    <h3 class="intro-subtitle">Living Room</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title">
                        Make Your Living Room <br>Work For You.<br>
                        <span class="text-primary">
                            <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                        </span>
                    </h1><!-- End .intro-title -->

                    <a href="category.html" class="btn btn-primary">
                        <span>Shop Now</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->





    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <div class="heading heading-center mb-3">
            <h2 class="title">Top Selling Products</h2><!-- End .title -->

            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                </li>
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content">
            <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                <div class="products">
                    <div class="row justify-content-center">


                        @foreach($product as $item)
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{$item->image}}" alt="Product image" class="product-image">
                                        <img src="{{$item->image}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">{{$item->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{$item->unit_price}}
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <button class="btn-product btn-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}"><span>add to cart</span></button>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add quantity</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="number" placeolder="quantity" class="form-control" id="cart-qty-{{$item->id}}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" onclick="submitForm(`{{$item->id}}`)" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

</main><!-- End .main -->


@endsection