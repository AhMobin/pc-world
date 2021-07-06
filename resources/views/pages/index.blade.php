@extends('layouts.app')

@section('content')
<!-- Start Slider Area -->
@include('partial.slider')
<!-- End Slider Area -->


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
                                <h4><a href="{{ route('build.desktop') }}"><span style="color: #fff">Desktops</span> </a></h4>
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
                                <h4><a href="{{ route('normal.laptop') }}"><span style="color: #fff">Laptops</span> </a></h4>
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
                                <h4><a href="{{ route('workstation.desktop') }}"><span style="color: #fff">Workstations</span> </a></h4>
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

@php
    $review = DB::table('featured_reviews')->where('status',1)->get();
@endphp


<!-- Start Review Slider-->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        @foreach($review as $feat)
        <!-- Start single Review -->
        <section class="single__slide htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>{{ $feat->feature_title }}</h2>
                            <h3>"{{ $feat->feature_review }}"</h3>
                            <a class="fr__btn" href="{{ $feat->feature_btn_link }}">{{ $feat->feature_btn }}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="{{ ($feat->feature_image) }}" alt="banner images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End single Review -->
        @endforeach
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
                            <!-- <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, quaerat?</p> -->
                        </div>
                    </div>
                </div>

                @php
                    $recom = DB::table('our_recommendations')->where('status',1)->limit(4)->get();
                @endphp

                <div class="row">
                    <div class="product__wrap clearfix">
                        @foreach($recom as $row)
                        <!-- Start Single Category -->
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <form action="{{ url('recom/cart/'.$row->id) }}" method="post">
                                @csrf
                                <div class="category cat_bg">
                                    <div class="ht__cat__thumb">
                                        <ul style="text-align: center">
                                            <li style="text-align: center">
                                                <img src="{{ url($row->recom_image)}}" alt="" height="150px" width="150px">
                                            </li>
                                            <li style="padding: 10px; text-align: center">
                                                <h5 style="color: #fff">{{ $row->recom_title }}</h5>
                                                <input type="hidden" name="qty" value="1">
                                            </li>
                                            <hr>

                                            <li style="color: #fff; text-align: left"><i class="fa fa-check" style="color: #2b542c"></i> {{ $row->cpu }} </li>
                                            <li style="color: #fff; text-align: left"><i class="fa fa-check" style="color: #2b542c"></i> {{ $row->motherboard }} </li>
                                            <li style="color: #fff; text-align: left"><i class="fa fa-check" style="color: #2b542c"></i> {{ $row->ram }} </li>
                                            <li style="color: #fff; text-align: left"><i class="fa fa-check" style="color: #2b542c"></i> {{ $row->gpu }} </li>
                                            <li style="color: #fff; text-align: left"><i class="fa fa-check" style="color: #2b542c"></i> {{ $row->storage }} </li>
                                        </ul>
                                    </div>

                                    <div class="fr__product__inner">
                                        <ul>
                                            <li><h3 class="recom__price">{{ $row->price }}<sup>TK</sup></h3></li>
                                        </ul>
                                        <br>
                                        <button type="submit" class="fr__btn" style="border: none;">Add To Cart</a>
                                    </div>
                                </div>
                            </form>    
                        </div>
                        <!-- End Single Category -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Recommendation Area -->

        <!-- Start Our Focus Area -->
        @php
            $focus = DB::table('focuses')->where('status',1)->limit(4)->get();
        @endphp
        <section class="htc__blog__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="color: #fff">Our Focus</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ht__blog__wrap clearfix">
                        @foreach($focus as $row)
                        <!-- Start Single Blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="#">
                                        <img src="{{ url($row->focus_image) }}" alt="blog images" style="height: 175px; width: 270px">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2 style="color: #fff; text-align: center">{{ $row->focus_title }}</h2>
                                    <p style="text-align: center;">{{ $row->focus_desc }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Banner Area -->

@endsection

