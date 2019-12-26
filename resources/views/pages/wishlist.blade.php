@extends('layouts.app')
@section('content')

    <style>
        .product-add{
            width: 18%;
        }
        .product-add i{
            font-size: 1.5rem;
        }
        .product-add :hover{
            color: darkgreen;
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
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Wishlists</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--100 bg__white" style="background: #1e1e24">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">products image</th>
                                    <th class="product-name">name of products</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-remove">Add To Cart</th>
                                </tr>
                                </thead>

                                @foreach($view as $row)
                                    <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ url($row->product_image_one) }}" alt="product img" height="70" width="90"/></a></td>
                                        <td class="product-name"><a href="#">{{ $row->product_name }}</a></td>
                                        <td class="product-price"><span class="amount">
                                                @if($row->discount_prize == NULL)
                                                    ${{ $row->selling_prize }}
                                                @else
                                                    ${{ $row->discount_prize }}
                                                 @endif
                                            </span></td>
                                        <td class="product-remove">
                                            <a href="{{ url('remove/wishlist/'.$row->id) }}"><i class="icon-trash icons"></i></a>
                                        </td>

                                        <td class="product-add">
                                            <a href="{{ url('added/into/cart/'.$row->id) }}"><i class="icon-check icons"></i></a>
                                        </td>

                                    </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="{{ url('/') }}">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->


@endsection
