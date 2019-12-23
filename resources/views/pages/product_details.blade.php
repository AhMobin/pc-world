@extends('layouts.app')
@section('content')

    <style>
        .cart, .wish{
            border: none;
        }
        .wish{
            background-color: maroon;
        }
        @foreach($color as $cl)
        .pro__color li{{'.'.$cl }} a {
            background: {{ $cl }} none repeat scroll 0 0;
            border: 1px solid black;
        }
        @endforeach


        /* -- quantity box -- */

        .quantity {
            display: inline-block; }

        .quantity .input-text.qty {
            width: 35px;
            height: 39px;
            padding: 0 5px;
            text-align: center;
            background-color: transparent;
            border: 1px solid #efefef;
        }

        .quantity.buttons_added {
            text-align: left;
            position: relative;
            white-space: nowrap;
            vertical-align: top; }

        .quantity.buttons_added input {
            display: inline-block;
            margin: 0;
            vertical-align: top;
            box-shadow: none;
        }

        .quantity.buttons_added .minus,
        .quantity.buttons_added .plus {
            padding: 7px 10px 8px;
            height: 41px;
            background-color: #ffffff;
            border: 1px solid #efefef;
            cursor:pointer;}

        .quantity.buttons_added .minus {
            border-right: 0; }

        .quantity.buttons_added .plus {
            border-left: 0; }

        .quantity.buttons_added .minus:hover,
        .quantity.buttons_added .plus:hover {
            background: #eeeeee; }

        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            margin: 0; }

        .quantity.buttons_added .minus:focus,
        .quantity.buttons_added .plus:focus {
            outline: none; }


    </style>


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}') no-repeat center center / cover ; height: 40vh">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <h2 style="color: #f2dede; text-align: left; font-weight: bold">Product Details: {{ $product -> product_name }}</h2>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->

<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
    <!-- Start Product Details Top -->
    <div class="htc__product__details__top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="htc__product__details__tab__content">
                        <!-- Start Product Big Images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                    <img src="{{ asset($product->product_image_one) }}" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                    <img src="{{ asset($product->product_image_two) }}" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                    <img src="{{ asset($product->product_image_three) }}" alt="full-image">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="{{ asset($product->product_image_one) }}" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="{{ asset($product->product_image_two) }}" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="{{ asset($product->product_image_three) }}" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <h2>{{ $product->product_name }}</h2>
                        <h6>Model: <span>{{ $product->product_model }}</span></h6>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">{{'$'. $product->selling_prize }}</li>
                            <li>
                            @php
                                if($product->discount_prize != NULL){
                                    echo '$'. $product->discount_prize;
                                }
                            @endphp
                            </li>
                        </ul>
                        <p class="pro__info">{!! $product->product_details !!} </p>
                        <div class="ht__pro__desc">
                            <div class="sin__desc">
                                <p><span>Availability:</span> In Stock</p>
                            </div>

                        <form action="{{ url('product/buy/'.$product->id) }}" method="POST">
                            @csrf

                            @php
                                if($product->product_color != NULL){
                            @endphp
                            <div class="sin__desc align--left">
                                <p><span>color:</span>&nbsp;</p>
                                <select name="product_color" id="" class="form-control">
                                    @foreach($color as $col)
                                    <option value="{{$col}}">{{ $col }}</option>
                                    @endforeach
                                </select>
{{--                                <ul class="pro__color">--}}
{{--                                    @foreach($color as $col)--}}
{{--                                        <li class="{{ $col }}" value="{{ $col }}"><a href="#">{{ $col }}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
                            </div>
                            @php } @endphp

                            @php
                                if($product->product_size != NULL){
                            @endphp
                            <div class="sin__desc align--left">
                                <p><span>size</span></p>
                           <select class="select__size" name="product_size">
                               @foreach($size as $sz)
                                    <option value="{{ $sz }}">{{ $sz }}</option>
                               @endforeach
                                </select>
                            </div>
                            @php } @endphp
                            <div class="sin__desc align--left">
                                <p><span>Categories:</span></p>
                                <ul class="pro__cat__list">
                                    <li>{{ $product->category_name }}</li>
                                </ul>
                            </div>

                            <div class="sin__desc align--left">
                                <p><span>Quantity: &nbsp;</span></p>
                                <div class="quantity buttons_added">
                                    <input type="number" min="1" max="100" name="qty" value="1" class="input-text qty" size="10">
                                </div>
                            </div>

                            <br><br>
                            <button class="fr__btn cart addCart" data-id="{{ $product-> id }}">ADD TO CART</button>

                        </form>
{{--                            <div class="sin__desc align--left">--}}
{{--                                <p><span>Product tags:</span></p>--}}
{{--                                <ul class="pro__cat__list">--}}
{{--                                    <li><a href="#">Fashion,</a></li>--}}
{{--                                    <li><a href="#">Accessories,</a></li>--}}
{{--                                    <li><a href="#">Women,</a></li>--}}
{{--                                    <li><a href="#">Men,</a></li>--}}
{{--                                    <li><a href="#">Kid,</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}


                            <div class="sin__desc product__share__link">
                                <p><span>Share this:</span></p>
                                <ul class="pro__share">
                                    <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->


{{--<!-- Start Product Description -->--}}
{{--<section class="htc__produc__decription bg__white">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12">--}}
{{--                <!-- Start List And Grid View -->--}}
{{--                <ul class="pro__details__tab" role="tablist">--}}
{{--                    <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>--}}
{{--                    <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">review</a></li>--}}
{{--                    <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">shipping</a></li>--}}
{{--                </ul>--}}
{{--                <!-- End List And Grid View -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12">--}}
{{--                <div class="ht__pro__details__content">--}}
{{--                    <!-- Start Single Content -->--}}
{{--                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">--}}
{{--                        <div class="pro__tab__content__inner">--}}
{{--                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>--}}
{{--                            <h4 class="ht__pro__title">Description</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>--}}
{{--                            <h4 class="ht__pro__title">Standard Featured</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Content -->--}}
{{--                    <!-- Start Single Content -->--}}
{{--                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">--}}
{{--                        <div class="pro__tab__content__inner">--}}
{{--                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>--}}
{{--                            <h4 class="ht__pro__title">Description</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>--}}
{{--                            <h4 class="ht__pro__title">Standard Featured</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Content -->--}}
{{--                    <!-- Start Single Content -->--}}
{{--                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">--}}
{{--                        <div class="pro__tab__content__inner">--}}
{{--                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>--}}
{{--                            <h4 class="ht__pro__title">Description</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>--}}
{{--                            <h4 class="ht__pro__title">Standard Featured</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Content -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- End Product Description -->--}}

@endsection
