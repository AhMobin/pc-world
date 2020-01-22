@extends('layouts.app')

@php
    $details = DB::table('users')->where('id',Auth::id())->first();
        $order = DB::table('orders')
            ->join('order_details','orders.id','order_details.order_id')
            ->select('order_details.*','orders.*')
            ->where('orders.user_id',Auth::user()->id)->limit(8)->orderBy('orders.id','DESC')->get();

@endphp
<head>
    <title>PC World - User Profile</title>
    <style>
        .user_profile{
            background-color: #1e1e24;
            padding: 30px 20px;
        }
        .user_profile_header{
            color: #fff;
            padding-bottom: 50px;
            text-align: center;
        }
        .user_name{
            margin: 10px auto;
            font-size: 1.4rem;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bold;
            color: #f2dede;
        }
    </style>
</head>



@section('content')

    <div class="user_profile">

        <div class="card">

            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="user_profile_header">
                                <h2 style="color: #fff">Customer Information</h2>
                            </div>
                            <table class="table table-bordered text-center" style="margin-bottom: 40px;">
                                <tr>
                                    <th width="40%">Customer ID</th>
                                    <td width="60%">{{ $details->id }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{ $details->name }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Phone</th>
                                    <td>{{ $details->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Email</th>
                                    <td>{{ $details->email }}</td>
                                </tr>
                            </table>
                        </div>



                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 d-flex align-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ url(Auth::user()->user_photo) }}" style="height: 90px; width: 90px; margin-left: 34%; border-radius: 50%;" >
                                <div class="card-body">
                                    <p class="card-title text-center user_name">{{ Auth::user()->name }}</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ route('edit.user.profile') }}"> Edit Profile </a></li>
                                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                                </ul>
                                <div class="card-body">
                                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 m-auto">
                        @if($order != NULL)
                            <div class="order_infos">
                                <h2 style="color: #fff; margin: 20px auto ;">Customer Orders Information</h2>
                            </div>
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>Product Price</th>
                                    <th>Total Price</th>
                                    <th>Paying Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($order as $row)
                                    <tr>
                                        <td>{{ $row->product_name }}</td>
                                        <td>{{ $row->quantity }}</td>
                                        <td>{{ $row->single_price }}</td>
                                        <td>{{ $row->total_amount }}</td>
                                        <td>{{ $row->paying_amount }}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>
                                            @if($row->status == 0)
                                                <span class="badge badge-warning">pending</span>
                                            @elseif($row->status == 1)
                                                <span class="badge badge-info">Payment Accept</span>
                                            @elseif($row->status == 2)
                                                <span class="badge badge-secondary">Delivery In Processing</span>
                                            @elseif($row->status == 3)
                                                <span class="badge badge-success">Delivered</span>
                                            @else
                                                <span class="badge badge-danger">Canceled</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
