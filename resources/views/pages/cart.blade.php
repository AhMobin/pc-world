@extends('layouts.app')
@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: url('{{ asset("public/frontend/images/slider/bg/slider-1.jpg") }}') no-repeat center center / cover ; height: 40vh">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Shopping Cart</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">products</th>
                                    <th class="product-name">name of products</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-color">Color</th>
                                    <th class="product-quantity">Size</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $row)
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ asset($row->options->image) }}" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">{{ $row->name }}</a>
{{--                                        <ul  class="pro__prize">--}}
{{--                                            <li class="old__prize"></li>--}}
{{--                                            <li>$75.2</li>--}}
{{--                                        </ul>--}}
                                    </td>
                                    <td class="product-price"><span class="amount">${{ $row->price }}</span></td>
                                    <td class="product-quantity"><input type="number" name="qty" value="{{ $row->qty }}" /></td>
                                    <td style="font-size: 16px; font-weight: bold; text-transform: capitalize">{{ $row->options->color }}</td>
                                    <td >{{ $row->options->size }}</td>
                                    <td class="product-subtotal">${{ $row->price * $row->qty }}</td>
                                    <td class="product-remove"><a href="{{ url('remove/cart/'.$row->rowId) }}"><i class="icon-trash icons"></i></a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="buttons-cart checkout--btn">
                                        <a href="#">update</a>
                                        <a href="#">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
{{--                                <div class="ht__coupon__code">--}}
{{--                                    <span>enter your discount code</span>--}}
{{--                                    <div class="coupon__box">--}}
{{--                                        <input type="text" placeholder="">--}}
{{--                                        <div class="ht__cp__btn">--}}
{{--                                            <a href="#">enter</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                <div class="htc__cart__total">
                                    <h6>cart total</h6>
                                    <div class="cart__desk__list">
                                        <ul class="cart__desc">
                                            <li>cart total</li>
                                            <li>tax</li>
                                            <li>shipping</li>
                                        </ul>
                                        <ul class="cart__price">
                                            <li>${{ Cart::subtotal() }}</li>
                                            <li>${{ Cart::tax() }}</li>
                                            <li>0</li>
                                        </ul>
                                    </div>
                                    <div class="cart__total">
                                        <span>order total</span>
                                        <span>${{ Cart::total() }}</span>
                                    </div>
                                    <ul class="payment__btn">
                                        <li class="active"><a href="#">payment</a></li>
                                        <li><a href="#">continue shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->


@endsection
