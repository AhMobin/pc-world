@extends('layouts.app')

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
        .upb{
            border: none;
        }
    </style>
</head>



@section('content')

    <div class="user_profile">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="user_profile_header">
                                <h2 style="color: #fff">Update Customer Information</h2>
                            </div>
                            <form action="{{ route('customer.profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="customerName">Customer Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="customerPhone">Customer Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}">
                                </div>

                                <div class="form-group">
                                    <label for="customerEmail">Customer Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $customer->email }}">
                                </div>

                                @if($customer->user_photo != NULL)
                                <div class="form-group">
                                    <label for="customerCurrentPhoto">Current Photo</label><br>
                                    <img src="{{ url($customer->user_photo) }}" alt="" height="100" width="120">
                                </div>
                                @else
                                @endif

                                <div class="form-group">
                                    <label for="customerNewPhoto">New Photo</label><br>
                                    <input type="file" class="form-control" name="user_photo">
                                    @if($customer->user_photo != NULL)
                                    <input type="hidden" class="form-control" name="old_photo" value="{{ $customer->user_photo }}">
                                    @else
                                    @endif
                                </div>

                                <button type="submit" class="fr__btn upb">Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
