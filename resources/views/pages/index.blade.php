@extends('layouts.app')

@section('content')
<!-- Start Slider Area -->
@include('partial.slider')
<!-- End Slider Area -->

{{--<div class="category__header">--}}
{{--    <h2>{{'Our Popular Categories'}}</h2>--}}
{{--</div>--}}

<!-- Start Category Area -->
<section class="htc__category__area category_pad">
    <div class="container">
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">

                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="#">
                                    <img src="{{asset('public/frontend/images/category/desktops.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="#">Desktops</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="#">
                                    <img src="{{asset('public/frontend/images/category/laptops.jpg')}}" alt="product images">
                                </a>
                            </div>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="#">Laptops</a></h4>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="#">
                                    <img src="{{asset('public/frontend/images/category/workstation-desktops.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="#">Desktop Workstation</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->

                </div>
            </div>
        </div>
    </div>
</section>
        <!-- End Category Area -->

        <!-- Featured Review Area -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section__title--2 text-center title_review">
                <h2 class="title__line">Featured Reviews</h2>
            </div>
        </div>
    </div>
</div>

<!-- Start Review Slider-->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start single Review -->
        <section class="single__slide htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur dicta eligendi reprehenderit similique"</h3>
                            <a class="fr__btn" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="{{asset('public/frontend/images/reviews/review-1.png')}}" alt="banner images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End single Review -->

        <!-- Start single Review -->
        <section class="single__slide htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur dicta eligendi reprehenderit similique"</h3>
                            <a class="fr__btn" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="{{asset('public/frontend/images/reviews/review-2.png')}}" alt="banner images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End single Review -->

        <!-- Start single Review -->
        <section class="single__slide htc__good__sale bg__cat--3 review__slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur dicta eligendi reprehenderit similique"</h3>
                            <a class="fr__btn" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="{{asset('public/frontend/images/reviews/review-3.png')}}" alt="banner images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End single Review -->
    </div>
</div>
<!-- Start Review Slider-->

        <!-- Start Recommendation Area -->
        <section class="ftr__product__area ptb--100" style="background: #1e1e24">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="color: #fff">Our Recommendation</h2>
                            <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, quaerat?</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category cat_bg">
                                <div class="ht__cat__thumb">
                                    <ul style="text-align: center">
                                        <li style="text-align: center">
                                            <img src="{{ asset('public/frontend/images/product/desktops.jpg')}}" alt="" height="100px" width="150px">
                                        </li>
                                        <li style="padding: 10px; text-align: center">
                                            <h5 style="color: #fff">Lorem ipsum dolor sit amet.</h5>
                                        </li>
                                        <hr>

                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                        <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <ul>
                                        <li><h3 class="recom__price">$1013</h3></li>
                                    </ul>
                                    <br>
                                    <a class="fr__btn" href="#">Customize Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category cat_bg">
                                <div class="ht__cat__thumb">
                                    <ul style="text-align: center">
                                        <li style="text-align: center">
                                            <img src="{{ asset('public/frontend/images/product/laptops.jpg')}}" alt="" height="100px" width="150px">
                                        </li>
                                        <li style="padding: 10px; text-align: center">
                                            <h5 style="color: #fff">Lorem ipsum dolor sit amet.</h5>
                                        </li>
                                        <hr>

                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                        <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <ul>
                                        <li><h3 class="recom__price">$1013</h3></li>
                                    </ul>
                                    <br>
                                    <a class="fr__btn" href="#">Customize Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category cat_bg">
                                <div class="ht__cat__thumb">
                                    <ul style="text-align: center">
                                        <li style="text-align: center">
                                            <img src="{{ asset('public/frontend/images/product/workstation-desktops.jpg')}}" alt="" height="100px" width="150px">
                                        </li>
                                        <li style="padding: 10px; text-align: center">
                                            <h5 style="color: #fff">Lorem ipsum dolor sit amet.</h5>
                                        </li>
                                        <hr>

                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                        <li><i class="fa fa-check" style="color: #2b542c"></i> Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                        <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <ul>
                                        <li><h3 class="recom__price">$1013</h3></li>
                                    </ul>
                                    <br>
                                    <a class="fr__btn" href="#">Customize Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Recommendation Area -->

        <!-- Start Our Focus Area -->
        <section class="htc__blog__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="color: #fff">Our Focus</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ht__blog__wrap clearfix">
                        <!-- Start Single Blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="#">
                                        <img src="{{asset('public/frontend/images/focus/assembly.jpg')}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2 style="color: #fff"><a href="#">Craftsmanship</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nam, provident quasi ratione voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur. </p>
{{--                                    <div class="blog__btn">--}}
{{--                                        <a href="#">Read More</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="#">
                                        <img src="{{asset('public/frontend/images/focus/no-compromises-page.jpg')}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2 style="color: #fff"><a href="#">Performance</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nam, provident quasi ratione voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur. </p>
{{--                                    <div class="blog__btn">--}}
{{--                                        <a href="#">Read More</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="#">
                                        <img src="{{asset('public/frontend/images/focus/testing.jpg')}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2 style="color: #fff"><a href="#">Testing</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nam, provident quasi ratione voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur. </p>
{{--                                    <div class="blog__btn">--}}
{{--                                        <a href="#">Read More</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="#">
                                        <img src="{{asset('public/frontend/images/focus/a-plus-support.jpg')}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2 style="color: #fff"><a href="#">Support</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nam, provident quasi ratione voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur. </p>
{{--                                    <div class="blog__btn">--}}
{{--                                        <a href="#">Read More</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Banner Area -->

@endsection
