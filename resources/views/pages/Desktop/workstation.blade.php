@extends('layouts.app')
@section('content')

    @php
        $product = DB::table('products')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','brands.brand_name')
        ->where('category_id',1)->where('subcategory_id',2)->where('status',1)->orderBy('id','DESC')->get();
    @endphp

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: url('{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}') no-repeat center center / cover ; height: 40vh">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Workstation</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Contact Area -->
    <section class="htc__contact__area ptb--100" style="background: #1e1e24">
        <div class="container">
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Category -->
                    @foreach($product  as $pr)
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category cat_bg">
                                <div class="ht__cat__thumb">
                                    <ul style="text-align: center">
                                        <li style="text-align: center">
                                            <img src="{{ URL::to($pr->product_image_one) }}" alt="" height="180px" width="200px">
                                        </li>
                                        <li style="padding: 10px; text-align: center">
                                            <h5 style="color: #fff">{{ $pr -> product_name }}</h5>
                                        </li>
                                        <hr>

                                        <li><strong style="color: #fff">Product Code: </strong> &nbsp;{{ $pr->product_code }} </li>
                                        <li><strong style="color: #fff">Product Model: </strong> &nbsp; {{ $pr->product_model }} </li>
                                        <li><strong style="color: #fff;">Available Colors: </strong> &nbsp;  <span style="text-transform: capitalize;">{{ $pr->product_color }}</span> </li>
                                        <li><strong style="color: #fff">Brand: </strong> &nbsp;  {{ $pr->brand_name }}</li>
                                    </ul>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="#" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="#" title="View Product"><i class="icon-eye icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <ul>
                                        <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">${{ $pr->selling_prize }}</h3></li>
                                    </ul>
                                    <br>
                                    <a class="fr__btn" href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- End Single Category -->
                </div>
            </div>
        </div>
    </section>
    <!-- End gear Area -->

@endsection
