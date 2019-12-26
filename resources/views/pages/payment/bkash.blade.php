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
                            @php
                                $cart = Cart::content();
                            @endphp
                            @foreach($cart as $row)
                                <tr>
                                    <td class="product-name" style="font-size: 1rem; font-weight: bold">{{ $row->options->code }}</td>
                                    <td class="product-name" style="font-size: 1rem; font-weight: bold">{{ $row->name }}</td>
                                    <td class="product-price"><span class="amount">${{ $row->price }}</span></td>
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
                                <th>${{ Cart::tax() }}</th>
                            </tr>
                            <tr>
                                <th>Shipping Charge</th>
                                <th>$5</th>
                            </tr>
                            <tr>
                                <th>Total Payable</th>
                                <th>${{ Cart::total()+5 }} <br><span style="font-weight: normal">BDT {{ round((Cart::total()+5)*85) }}</span></th>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="htc__cart__total" style="background-color: white; padding: 20px">
                        <h6>Pay By bKash</h6>
                        <div class="cart__desk__list">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <form action="{{ route('paying.bkash') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="customerEmail">BKash Transection ID</label>
                                        <input type="text" class="form-control" name="tranx_id" placeholder="Payment Transection Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="customerCity">Paying Amount</label>
                                        <input type="text" class="form-control" name="paying_amount" placeholder="Total Paying Amount" required>
                                    </div>

                                    <input type="hidden" class="form-control" name="shipping_charge" value="5">
                                    <input type="hidden" class="form-control" name="tax" value="{{ Cart::tax() }}">
                                    <input type="hidden" class="form-control" name="total_amount" value="{{ round((Cart::total()+5)*85) }}">
                                    <input type="hidden" class="form-control" name="ship_name" value="{{ $data['name'] }}">
                                    <input type="hidden" class="form-control" name="ship_phone" value="{{ $data['phone_number'] }}">
                                    <input type="hidden" class="form-control" name="ship_email" value="{{ $data['email_address'] }}">
                                    <input type="hidden" class="form-control" name="ship_zip" value="{{ $data['zip'] }}">
                                    <input type="hidden" class="form-control" name="ship_city" value="{{ $data['city'] }}">
                                    <input type="hidden" class="form-control" name="ship_address" value="{{ $data['physical_address'] }}">
                                    <input type="hidden" class="form-control" name="payment_type" value="{{ $data['payment'] }}">

{{--                                    <ul class="payment__btn">--}}
{{--                                        <li><button type="submit" class="pay">pay now</button></li>--}}
{{--                                    </ul>--}}
                                    <button type="submit" class="pay">pay now</button>
                                </form>
                            </div>
                        </div>


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
