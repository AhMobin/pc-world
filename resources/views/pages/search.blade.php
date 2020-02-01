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


    <!-- Start search page Area -->
    <section class="htc__contact__area pb--100" style="background: #1e1e24">
        <div class="container">
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Category -->
                    @foreach($products as $pr)
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <div class="category cat_bg">
                                <div class="ht__cat__thumb">
                                    <ul style="text-align: center">
                                        <li style="text-align: center">
                                            <a href="{{ url('product/details/'.$pr->product_slug) }}"><img src="{{ URL::to($pr->product_image_one) }}" alt="" height="180px" width="200px"></a>
                                        </li>
                                        <li style="padding: 10px; text-align: center">
                                            <a href="{{ url('product/details/'.$pr->product_slug) }}"><h5 style="color: #fff">{{ $pr -> product_name }}</h5></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><button class="addwishlist" title="Add to Wishlist" data-id="{{ $pr->id }}"><i class="icon-heart icons"></i></button></li>
                                        <li><a href="{{ url('product/details/'.$pr->product_slug) }}" title="View Product"><i class="icon-eye icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <ul>
                                        <li><strong style="color: #fff">Price: </strong><h3 class="recom__price" style="color: maroon">{{ $pr->selling_prize }}<sup>TK</sup></h3></li>
                                    </ul>
                                    <br>
                                    <button class="fr__btn addCart" data-id="{{ $pr-> id }}">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                <!-- End Single Category -->
                    @endforeach
                </div>
                <div class="shop_page_nav d-flex flex-row">
                    <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                     {{   $products->links() }}
                    <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                </div>

            </div>
        </div>
    </section>
    <!-- End search page Area -->

@endsection
