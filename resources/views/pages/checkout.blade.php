@extends('layouts.app')
@section('content')

    <style>
        .order{
            background: #1e1e24 none repeat scroll 0 0;
            color: white;
            display: inline-block;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            height: 65px;
            width: 100%;
            line-height: 65px;
            text-align: center;
            text-transform: uppercase;
            border: none;
            transition: all 0.4s ease 0s;
            box-sizing: border-box;
        }
        .order:hover{
            background-color: #c43b68;
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
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">Shopping Cart</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- checkout-main-area start -->
    <div class="cart-main-area ptb--100 bg__white" style="background: #1e1e24">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
{{--                    <form action="">--}}
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
                                        <input type="hidden" name="product_id" value="{{ $row->rowId }}">
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset($row->options->image) }}" alt="product img" /></a></td>
                                        <td class="product-name"><a href="#" name="product_name">{{ $row->name }}</a>
                                            {{--                                        <ul  class="pro__prize">--}}
                                            {{--                                            <li class="old__prize"></li>--}}
                                            {{--                                            <li>$75.2</li>--}}
                                            {{--                                        </ul>--}}
                                        </td>
                                        <td class="product-price"><span class="amount">${{ $row->price }}</span></td>
                                        <td style="font-size: 16px; font-weight: bold;">{{ $row->qty }}</td>
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
                                        <a href="{{ url('view/cart/') }}">back</a>
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
                                <div class="htc__cart__total" style="background-color: white; padding: 20px">
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
                                            <li>$5</li>
                                        </ul>
                                    </div>
                                    <div class="cart__total">
                                        <span>order total</span>
                                        <span>${{ Cart::total()+5 }}</span>
                                    </div>
                                    <ul class="payment__btn">
                                        <li><a href="{{ route('order.process') }}">Order Now</a></li>
                                        <li ><a href="{{ url('/') }}">Continue Shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-main-area end -->

{{--    <!-- start order confirmation modal -->--}}
{{--    <div class="modal fade" id="ordernow" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-scrollable" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalScrollableTitle">Required Information</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form action="{{ url('customer/placed/order') }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="customerNumber">Phone Number</label>--}}
{{--                            <input type="text" class="form-control" name="phone_number" placeholder="Your Valid Phone Number">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="customerEmail">Email Address</label>--}}
{{--                            <input type="email" class="form-control" name="email_address" placeholder="Your Valid Email Address">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="customerAddress">Customer Address</label>--}}
{{--                            <textarea class="form-control" name="physical_address"></textarea>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- order modal end -->--}}


@endsection
