@extends('layouts.app')
@section('content')

    <style>
        .pay{
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
        .pay:hover{
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
                            <h2 style="color: #f2dede; text-align: left; font-weight: bold">Payment Process</h2>
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
            <div class="col-md-6 col-sm-6 col-xs-12 col-sm-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="product-name">code</th>
                            <th class="product-name">name of products</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $row)
                            <tr>
                                <td class="product-name" style="font-size: 1rem; font-weight: bold">{{ $row->options->code }}</td>
                                <td class="product-name" style="font-size: 1rem; font-weight: bold">{{ $row->name }}</td>
                                <td class="product-price"><span class="amount">{{ $row->price }}</span></td>
                                <td style="font-size: 16px; font-weight: bold;">{{ $row->qty }}</td>
                                <td class="product-subtotal">${{ $row->price * $row->qty }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-content table-responsive">
                    <table>
                        <tr>
                            <th>Cart Total</th>
                            <th>${{ Cart::subtotal() }}</th>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <th>{{ Cart::tax() }}</th>
                        </tr>
                        <tr>
                            <th>Shipping Charge</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>Total Payable</th>
                            <th>{{ Cart::total() }}</span></th>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                <div class="htc__cart__total" style="background-color: white; padding: 20px">
                    <h6>Shipping address</h6>
                    <div class="cart__desk__list">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <form action="{{ route('payment.process') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="customerNumber">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerNumber">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number" placeholder="Your Valid Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerEmail">Email Address</label>
                                    <input type="email" class="form-control" name="email_address" placeholder="Your Valid Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerCity">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Your City Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerCity">City</label>
                                    <input type="text" class="form-control" name="zip" placeholder="Zip Code" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerAddress">Customer Address</label>
                                    <textarea class="form-control" name="physical_address" placeholder="Your Address" required></textarea>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <h5 class="text-center" style="text-transform: uppercase; font-weight: bold">Payment By</h5><br>
                                </div>
                                <div class="form-group">
                                    <label for="paymentGateways">Select A Gateway</label><br>
                                    <input type="radio" name="payment" value="stripe" disabled>&nbsp; <img src="{{ asset('public/backend/img/payment-gateways/mastercard.png') }}" alt="" height="30" width="60"> &nbsp;
                                    <input type="radio" name="payment" value="paypal" disabled>&nbsp; <img src="{{ asset('public/backend/img/payment-gateways/ideal.png') }}" alt="" height="30" width="60"> &nbsp;
                                    <input type="radio" name="payment" value="ideal" disabled>&nbsp; <img src="{{ asset('public/backend/img/payment-gateways/paypal.png') }}" alt="" height="30" width="60"> &nbsp;
                                    <input type="radio" name="payment" value="bkash" >&nbsp; <img src="{{ asset('public/backend/img/payment-gateways/bkash.png') }}" alt="" height="30" width="60"> &nbsp;
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="ourbKashNumber">Our bKash Marcendise Number</label>--}}
{{--                                    <input type="text" class="form-control" name="ourbkash" value="01234567891" readonly>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="ourbKashNumber">Custom Transaction ID</label>--}}
{{--                                    <input type="text" class="form-control" name="customer_traxid" placeholder="TranxID# 12579784631574">--}}
{{--                                </div>--}}

                                <ul class="payment__btn">
                                    <li><button type="submit" class="pay">payment</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <ul class="payment__btn">
{{--                        <li class="active"><a href="{{ route('payment.process') }}">payment</a></li>--}}
                        <li ><a href="{{ url('/') }}">Continue Shopping</a></li>
                    </ul>

                </div>
            </div>



        </div>
    </div>
</div>


{{--                    <div class="row">--}}
{{--                        <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <div class="buttons-cart--inner">--}}
{{--                                <div class="buttons-cart">--}}
{{--                                    <a href="{{ url('view/cart/') }}">back</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

@endsection
