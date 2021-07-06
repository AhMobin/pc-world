@extends('layouts.app')
@section('content')

        <style>
            .addwishlist{
                padding: 12px 18px;
                border: none;
                color: #333;
            }
            .addwishlist:hover{
                background-color: #c43b68;
                color: #f3f3f3;
            }
            .i_wish:hover{
                color: #f3f3f3;
            }

            .addCart{
                border: none;
            }
        </style>

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: url('{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}') no-repeat center center / cover ; height: 40vh">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Gears And Accessories</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Contact Area -->
    <section class="htc__contact__area pb--100" style="background: #1e1e24">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-push-2 col-md-10 col-md-push-2 col-sm-12 col-xs-12">
                    
                    <div class="ptb--10 mt--10" style="background-color: darkgray; color: black; padding-left: 10px">Keyboard</div>

                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($keyboards as $keyboard)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$keyboard->product_slug) }}"><img src="{{ URL::to($keyboard->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$keyboard->product_slug) }}"><h5 style="color: #fff">{{ $keyboard -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $keyboard->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$keyboard->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $keyboard->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$keyboard->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $keyboard->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $keyboard-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px">Mouse</div>

                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($mouse as $mice)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$mice->product_slug) }}"><img src="{{ URL::to($mice->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$mice->product_slug) }}"><h5 style="color: #fff">{{ $mice -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $mice->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$mice->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $mice->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$mice->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $mice->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $mice-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>



                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px">Headphones</div>
                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($headphones as $hdp)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><img src="{{ URL::to($hdp->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><h5 style="color: #fff">{{ $hdp -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $hdp->brand_name }}</strong></a>
                                                </li>
                                                <!-- <hr> -->

                                                <!-- <li><strong style="color: #fff">Product Code: </strong> &nbsp;{{ $hdp->product_code }} </li> -->
                                                <!-- <li><strong style="color: #fff">Product Model: </strong> &nbsp; {{ $hdp->product_model }} </li> -->
                                                <!-- <li><strong style="color: #fff;">Available Colors: </strong> &nbsp;  <span style="text-transform: capitalize;">{{ $hdp->product_color }}</span> </li> -->
                                                <!-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $hdp->brand_name }}</li> -->
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$hdp->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $hdp->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$hdp->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdp->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $hdp-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px;">Earphones</div>
                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($earphones as $hdp)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><img src="{{ URL::to($hdp->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><h5 style="color: #fff">{{ $hdp -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $hdp->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$hdp->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $hdp->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$hdp->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdp->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $hdp-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px">Speakers</div>
                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($speakers as $hdp)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><img src="{{ URL::to($hdp->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><h5 style="color: #fff">{{ $hdp -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $hdp->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$hdp->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $hdp->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$hdp->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdp->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $hdp-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px">WebCam</div>
                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($webcams as $hdp)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><img src="{{ URL::to($hdp->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><h5 style="color: #fff">{{ $hdp -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $hdp->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$hdp->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $hdp->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$hdp->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdp->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $hdp-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="ptb--10 mt--50" style="background-color: darkgray; color: black; padding-left: 10px">Cables & Pads</div>
                    <div class="htc__product__rightidebar" >
                        <div class="row">
                            <div class="product__wrap clearfix" style="margin-top: 0">
                                <!-- Start Single Category -->
                                @foreach($cable_pads as $hdp)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category cat_bg">
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><img src="{{ URL::to($hdp->product_image_one) }}" alt="" style="height:150px; width:80%"></a>
                                                </li>
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="{{ url('product/details/'.$hdp->product_slug) }}"><h5 style="color: #fff">{{ $hdp -> product_name }} </h5><strong style="color: white; font-weight: bold"> {{ $hdp->brand_name }}</strong></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
            {{--                                    <li><a href="{{ URL::to('add/wishlist/'.$hdp->id) }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
                                                <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $hdp->id }}"><i class="icon-heart icons i_wish"></i></button></li>
                                                <li><a href="{{ url('product/details/'.$hdp->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdp->selling_prize }}<sup>TK</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="{{ $hdp-> id }}">ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Category -->
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>


                <div class="col-lg-2 col-lg-pull-10 col-md-2 col-md-pull-10 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="htc__product__leftsidebar">
                        <!-- Start Prize Range -->
                        <!-- <div class="htc-grid-range">
                            <h4 class="title__line--4" style="color: white">Price</h4>
                            <div class="content-shopby">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="GET">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span style="color:gray;">Price :</span><input type="text" name="price_filter" id="amount" readonly style="background-color: #1e1e24; color: white">
                                                </div>
                                                <div class="price--filter">
                                                    <a href="#" style="color: white">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Prize Range -->

                        <!-- Start Brand Area -->
                        <div class="htc__category">
                            <h4 class="title__line--4" style="color: white">All Brands</h4>
                            <ul class="ht__cat__list">
                                @foreach($brands as $br)
                                    <li><a style="color: gray" href="#">{{ $br->brand_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Brand Area -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End gear Area -->

    <!-- Ajax CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- Ajax For Add Wishlist-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.addwishlist').on('click', function() {
                var id = $(this).data('id');
                if(id){
                    $.ajax({
                        url: "{{ url('/add/wishlist/') }}/"+id,
                        type: "GET",
                        dataType: "json",
                        success:function (data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                            if($.isEmptyObject(data.error)){
                                Toast.fire({
                                    type: 'success',
                                    title: data.success,
                                })
                            }else{
                                Toast.fire({
                                    type: 'error',
                                    title: data.error,
                                })
                            }

                        },
                    })
                }
                else{
                    alert('danger');
                }
            })
        })
    </script>


    <!-- Ajax For Add Cart-->

    <script type="text/javascript">
        $(document).ready(function () {
            $('.addCart').on('click', function(){
                var id = $(this).data('id');

                if(id){
                    $.ajax({
                        url: "{{ url('/add/to/cart/') }}/"+id,
                        type: "GET",
                        dataType: "json",
                        success:function (data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                            if($.isEmptyObject(data.error)){
                                Toast.fire({
                                    type: 'success',
                                    title: data.success,
                                })
                            }else {
                                Toast.fire({
                                    type: 'error',
                                    title: data.error,
                                })
                            }
                        },
                    })
                }
            })
        })
    </script>

@endsection
