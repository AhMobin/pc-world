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
                                <h2 style="color: #fff">User Information</h2>
                            </div>
                            <table class="table table-dark table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 d-flex align-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('public/frontend/images/users/img2.jpg') }}" style="height: 90px; width: 90px; margin-left: 34%; border-radius: 50%;" >
                                <div class="card-body">
                                    <p class="card-title text-center user_name">{{ Auth::user()->name }}</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                                    <li class="list-group-item"><a href="#"> Edit Profile </a></li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
