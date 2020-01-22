@extends('layouts.app')
@section('content')



    <style>
        .config_title{
            color: lightgray;
            text-align: center;
            margin-bottom: 30px;
        }
        .select{
            border: none;
            background-color: #0d5a66;
        }
        .sp_title{
            color: lightgray;
            font-size: 1.8rem;
            font-family: "Times New Roman";
            padding: 15px;
            border: 1px solid gray;
            border-top: none;
            background-color: #0c1923;
        }
        .left_desc{
            border-right: 1px solid lightgray;
        }
        .spec_sec{
            border: 1px solid gray;
        }
        .sp_desc{
            border-bottom: 1px solid lightgray;
            margin-top: 8px;
        }
        .sp_desc:last-child{
            border: none;
        }

        dl{
            color: lightgray;
            font-size: 1rem;
        }
        dt{
            margin-left: 15px;
            font-size: .8rem;
            color: lightgray;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .product__building{
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .config_title_build{
            color: lightgray;
            font-size: 1.3rem;
            text-align: left;
            margin-left: 60px;
            margin-bottom: 30px;
        }
        .click{
            height: 50px;
            background-color: darkgray;
            position: relative;
        }
        .click_title{
            font-size: 1.5rem;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bold;
            margin-top: 5px;
            margin-left: 50px;
            color: black;
            text-transform: uppercase;
        }
        .image{
            position: absolute;
            top: 0;
            left: 0;
            width: 150px;
            height: 100%;
        }

        .content{
            position: absolute;
            top: 25%;
            left: 15%;
        }

        .build_pr{
            margin-bottom: 50px;
        }

        .fr__btn{
            border:none;
        }

    </style>


    @php
        $build = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',4)->where('status',1)->get();

        $cpu = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',6)->where('status',1)->get();
        $motherboard = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',7)->where('status',1)->get();
        $memory = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',8)->where('status',1)->get();
        $cooling = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',9)->where('status',1)->get();
        $casefan = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',10)->where('status',1)->get();
        $gpu = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',11)->where('status',1)->get();
        $storage = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',12)->where('status',1)->get();
        $powersup = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',13)->where('status',1)->get();
        $hddcase = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',14)->where('status',1)->get();
        $os = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',15)->where('status',1)->get();
        $osd = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',16)->where('status',1)->get();
        $addon = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',17)->where('status',1)->get();
        $bays = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',18)->where('status',1)->get();
        $display = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',19)->where('status',1)->get();
        $software = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',20)->where('status',1)->get();
        $shipping = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('subcategory_id',21)->where('status',1)->get();

    @endphp

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: url('{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}') no-repeat center center / cover ; height: 40vh">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Configure Your Desktop</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->


    <!-- Start Contact Area -->

    <section class="htc__contact__area ptb--100" style="background-color: #1e1e24">
        <div>
            <h2 class="config_title">Design Configure</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <img src="{{ asset('public/frontend/images/product/desktops.jpg') }}" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!-- Start Product Description -->
                    <section class="htc__produc__decription">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- Start List And Grid View -->
                                    <ul class="pro__details__tab col-md-8 col-lg-8 col-sm-10 col-xs-10" role="tablist">
                                        <li role="presentation" class="description active"><a href="#designUpload" role="tab" data-toggle="tab">Upload Your Custom Design</a></li>
                                    </ul>
                                    <!-- End List And Grid View -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="ht__pro__details__content col-md-8 col-lg-8 col-sm-10 col-xs-10">
                                        <!-- Start Single Content -->
                                        <div role="tabpanel" id="designUpload" class="pro__single__content tab-pane fade in active">
                                            <div class="pro__tab__content__inner">
                                                <form action="{{ url('upload/design') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="user_design_pattern"><br>
                                                    <button class="fr__btn select" type="submit">Upload</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Product Description -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4 col-sm-6 col-xs-6 spec_sec">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header sp_title text-center">Specification</div>
                        <br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 left_desc">
                                    <div class="sp_desc">
                                        <dl>Size</dl><dt>(W) 9.75 x (H) 23.82 x (D) 24.8</dt>
                                    </div>
                                    <div class="sp_desc">
                                        <dl>Bays</dl>
                                        <dt>
                                            9 Internal x 2.5”
                                        </dt>
                                    </div>
                                    <div class="sp_desc">
                                        <dl>Ports</dl>
                                        <dt>1 Headphone Jack</dt>
                                        <dt>1 Microphone Jack</dt>
                                    </div>
                                    <div class="sp_desc">
                                        <dl>Size</dl><dt>(W) 9.75 x (H) 23.82 x (D) 24.8</dt>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                    <div class="sp_desc">
                                        <dl>USB</dl>
                                        <dt>2 x USB 3.0 </dt>
                                        <dt>1 x USB 3.1 Type-C </dt>
                                    </div>
                                    <div class="sp_desc">
                                        <dl>Special</dl>
                                        <dt>
                                            4 Variable Mounting Configurations
                                        </dt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <section class="product__building">
            <div>
                <h2 class="config_title_build">Build Desktop</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#cpu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">CPU</span>
                            </div>
                        </div>

                        <div class="collapse" id="cpu">
                            <div class="card card-body">

                                @foreach($cpu as $pros)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$pros->id) }}" method="post">
                                            @csrf
                                            <div class="ht__cat__thumb">
                                                <ul style="text-align: center">
                                                    <li style="text-align: center">
                                                        <a href="#">
                                                            <img src="{{ url($pros->product_image_one) }}" alt="" style="width: 115px;">
                                                        </a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $pros->brand_name }}</li> --}}
                                                    <li style="padding: 10px; text-align: center">
                                                        <a href="#"><p style="color: #fff">{{ $pros->product_name }}</p></a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $pros->product_model }} </li> --}}
                                                    <input type="hidden" name="qty" value="1">
                                                </ul>
                                            </div>

                                            <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                                <ul>
                                                    <li><strong style="color: #fff">Price: </strong><h5 class="recom__price" style="color: maroon">{{ $pros->selling_prize }}<sup>Tk</sup></h5></li>
                                                </ul>
                                                <br>
                                                    <button class="fr__btn addCart" data-id="{{ $pros->id }}">ADD TO CART</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                            <div class="click" data-toggle="collapse" href="#motherboard" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <div class="image">
                                    <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                                </div>
                                <div class="content">
                                    <span class="click_title">Motherboard</span>
                                </div>
                            </div>

                            <div class="collapse" id="motherboard">
                                <div class="card card-body">
                                    @foreach($motherboard as $mb)
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                        <div class="category cat_bg">
                                            <form action="{{ url('custom/product/cart/'.$mb->id) }}" method="post">
                                                @csrf
                                            <div class="ht__cat__thumb">
                                                <ul style="text-align: center">
                                                    <li style="text-align: center">
                                                        <a href="#"><img src="{{ url($mb->product_image_one) }}" alt="" style="width: 115px;"></a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $mb->brand_name }}</li> --}}
                                                    <li style="padding: 10px; text-align: center">
                                                        <a href="#"><p style="color: #fff">{{ $mb->product_name }}</p></a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $mb->product_model }} </li> --}}
                                                    <input type="hidden" name="qty" value="1">
                                                </ul>
                                            </div>

                                            <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                                <ul>
                                                    <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $mb->selling_prize }}<sup>Tk</sup></h3></li>
                                                </ul>
                                                <br>
                                                <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">

                        <div class="click" data-toggle="collapse" href="#memory" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Memory</span>
                            </div>
                        </div>

                        <div class="collapse" id="memory">
                            <div class="card card-body">
                                @foreach($memory as $mem)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$mem->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($mem->product_image_one) }}" alt="" style="width: 115px;"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $mem->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $mem->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $mem->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $mem->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#cooling" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Cooling</span>
                            </div>
                        </div>

                        <div class="collapse" id="cooling">
                            <div class="card card-body">
                                @foreach($cooling as $cool)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$cool->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($cool->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $cool->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $cool->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $cool->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $cool->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#casefan" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Case Fan</span>
                            </div>

                        </div>

                            <div class="collapse" id="casefan">
                                <div class="card card-body">
                                    @foreach($casefan as $fan)
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                        <div class="category cat_bg">
                                            <form action="{{ url('custom/product/cart/'.$fan->id) }}" method="post">
                                                @csrf
                                            <div class="ht__cat__thumb">
                                                <ul style="text-align: center">
                                                    <li style="text-align: center">
                                                        <a href="#"><img src="{{ url($fan->product_image_one) }}" alt="" style="width:110px"></a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $fan->brand_name }}</li> --}}
                                                    <li style="padding: 10px; text-align: center">
                                                        <a href="#"><p style="color: #fff">{{ $fan->product_name }}</p></a>
                                                    </li>
                                                    {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $fan->product_model }} </li> --}}
                                                    <input type="hidden" name="qty" value="1">
                                                </ul>
                                            </div>

                                            <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                                <ul>
                                                    <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $fan->selling_prize }}<sup>Tk</sup></h3></li>
                                                </ul>
                                                <br>
                                                <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#gpu" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">GPU</span>
                            </div>
                        </div>

                        <div class="collapse" id="gpu">
                            <div class="card card-body">
                                @foreach($gpu as $gp)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$gp->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($gp->product_image_one) }}" alt="" style="width: 110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $gp->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $gp->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $gp->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $gp->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#storagedrive" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Storage Drive</span>
                            </div>
                        </div>

                        <div class="collapse" id="storagedrive">
                            <div class="card card-body">
                                @foreach($storage as $store)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$store->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($store->product_image_one) }}" alt="" style="width: 110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $store->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $store->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $store->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $store->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#powersupply" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Power Supply</span>
                            </div>
                        </div>

                        <div class="collapse" id="powersupply">
                            <div class="card card-body">
                                @foreach($powersup as $power)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$power->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($power->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $power->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $power->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $power->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $power->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#hdcase" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Hard Drive Case</span>
                            </div>

                        </div>

                        <div class="collapse" id="hdcase">
                            <div class="card card-body">
                                @foreach($hddcase as $hdc)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$hdc->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($hdc->product_image_one) }}" alt="" style="width: 110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $hdc->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $hdc->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $hdc->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $hdc->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#os" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Operating System</span>
                            </div>

                        </div>

                        <div class="collapse" id="os">
                            <div class="card card-body">
                                @foreach($os as $op)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$op->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($op->product_image_one) }}" alt="" style="width: 110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $op->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $op->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $op->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $op->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#osdrive" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Operating System Drive</span>
                            </div>

                        </div>

                        <div class="collapse" id="osdrive">
                            <div class="card card-body">
                                @foreach($osd as $od)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$od->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($od -> product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $od->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $od->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $od->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $od->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#addoncards" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">add-on cards</span>
                            </div>

                        </div>

                        <div class="collapse" id="addoncards">
                            <div class="card card-body">
                                @foreach($addon as $add)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$add->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($add->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $add->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $add->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $add->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $add->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#baydevice" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">Bay Devices</span>
                            </div>
                        </div>

                        <div class="collapse" id="baydevice">
                            <div class="card card-body">
                                @foreach($bays as $bay)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$bay->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($bay->product_image_one) }}" alt="" style="width: 110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $bay->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $bay->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $bay->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $bay->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#display" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">display</span>
                            </div>
                        </div>

                        <div class="collapse" id="display">
                            <div class="card card-body">
                                @foreach($display as $dis)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$dis->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($dis->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $dis->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $dis->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $dis->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 build_pr">
                        <div class="click" data-toggle="collapse" href="#softwares" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">softwares</span>
                            </div>
                        </div>

                        <div class="collapse" id="softwares">
                            <div class="card card-body">
                               @foreach($software as $soft)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$soft->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($soft->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $soft->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><h5 style="color: #fff">{{ $soft->product_name }}</h5></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $soft->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $soft->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <hr>

        <section class="product__building">
            <div>
                <h2 class="config_title_build">Services</h2>
            </div>
            <div class="container">
                <div class="row build_pr">
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                        <div class="click" data-toggle="collapse" href="#shippingprotection" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="image">
                                <img src="{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="content">
                                <span class="click_title">shipping protection</span>
                            </div>
                        </div>

                        <div class="collapse" id="shippingprotection">
                            <div class="card card-body">
                                @foreach($shipping as $ship)
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                                    <div class="category cat_bg">
                                        <form action="{{ url('custom/product/cart/'.$ship->id) }}" method="post">
                                            @csrf
                                        <div class="ht__cat__thumb">
                                            <ul style="text-align: center">
                                                <li style="text-align: center">
                                                    <a href="#"><img src="{{ url($ship->product_image_one) }}" alt="" style="width:110px"></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Brand: </strong> &nbsp; {{ $ship->brand_name }}</li> --}}
                                                <li style="padding: 10px; text-align: center">
                                                    <a href="#"><p style="color: #fff">{{ $ship->product_name }}</p></a>
                                                </li>
                                                {{-- <li><strong style="color: #fff">Product Model: </strong> &nbsp;{{ $ship->product_model }} </li> --}}
                                                <input type="hidden" name="qty" value="1">
                                            </ul>
                                        </div>

                                        <div class="fr__product__inner" style="margin: 0; padding: 0;">
                                            <ul>
                                                <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $ship->selling_prize }}<sup>Tk</sup></h3></li>
                                            </ul>
                                            <br>
                                            <button class="fr__btn addCart" data-id="">ADD TO CART</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>




    </section>
    <!-- End Content Area -->

@endsection
