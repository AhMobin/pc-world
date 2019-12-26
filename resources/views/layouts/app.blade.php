
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf" value="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PC World - Laravel eCommerce Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="PC World">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="{{ asset('public/frontend/image/x-icon') }}" href="#">



    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/custom.css') }}">
    <!-- Toastr Css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <!-- Modernizr JS -->
    <script src="{{ asset('public/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <style>
        .wishborder{
            margin-right: 30px;
        }
    </style>
</head>

@php
    $category = DB::table('categories')->get();
@endphp


<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container">
                <div class="row">
                    <div class="menumenu__container clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                            <div class="logo">
                                <a href="{{ URL::to('/')}}"><img src="{{ asset('public/frontend/images/logo/pcw2.png') }}" alt="logo images"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                            <nav class="main__menu__nav hidden-xs hidden-sm">
                                <ul class="main__menu" style="font-weight: bold">
                                    <li class="drop"><a href="#">{{'Desktop'}}</a>
                                        <ul class="dropdown">
{{--                                            <li><a href="{{ route('gaming.desktop') }}">{{'Gaming Desktop'}}</a></li>--}}
                                            <li><a href="{{ route('build.desktop') }}">{{'Custom Build'}}</a></li>
                                            <li><a href="{{ route('workstation.desktop') }}">{{'Workstation Desktop'}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">{{'Laptop'}}</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('normal.laptop') }}">{{'Normal Laptop'}}</a></li>
                                            <li><a href="{{ route('gaming.laptop') }}">{{'Gaming Laptop'}}</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('gears') }}">{{'Gears'}}</a></li>

                                    <li class="drop"><a href="{{ route('support') }}">{{'Support'}}</a></li>

                                    <li><a href="{{ route('contact') }}">{{'Contact'}}</a></li>

                                    <li><a href="{{ route('about') }}">{{'About'}}</a></li>
                                </ul>
                            </nav>

                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li class="drop"><a href="{{URL::to('/')}}">{{'Home'}}</a></li>
                                        <li><a href="#">{{'Desktop'}}</a>
                                            <ul>
{{--                                                <li><a href="#">{{'Gaming Desktop'}}</a></li>--}}
                                                <li><a href="{{ route('build.desktop') }}">{{'Custom Build'}}</a></li>
                                                <li><a href="#">{{'Workstation Desktop'}}</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">{{'Laptop'}}</a>
                                            <ul>
                                                <li><a href="#">{{'Normal Laptop'}}</a></li>
                                                <li><a href="#">{{'Gaming Laptop'}}</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('gears') }}">{{'Gears'}}</a></li>

                                        <li><a href="{{ URL::to('support') }}">Support</a></li>

                                        <li><a href="{{ route('about') }}">{{'About'}}</a></li>

                                        <li><a href="#">{{'Contact'}}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                            <div class="header__right">
                                <div class="header__search search search__open">
                                    <a href="#"><i class="icon-magnifier icons"></i></a>
                                </div>

                                @guest
                                    <div class="header__account">
                                        <a href="{{ route('login') }}" title="User Login"><i class="icon-user icons"></i></a>
                                    </div>
                                @else
                                    <div class="header__account">
                                        <a href="{{ route('user.account') }}" title="User Account"><i class="icon-user icons"></i></a>
                                    </div>
{{--                                    <div class="header__account">--}}
{{--                                        <a href="{{ route('user.logout') }}" title="Logout"><i class="icon-logout icons"></i></a>--}}
{{--                                    </div>--}}
                                @endguest

                                @guest
                                @else
                                    @php
                                        $wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();
                                    @endphp
                                    <div class="htc__shopping__cart wishborder">
                                        <a class="" href="{{ route('view.wishlist') }}"><i class="icon-heart icons"></i></a>
                                        <a href="{{ route('view.wishlist') }}"><span class="htc__qua">{{ count($wishlist) }}</span></a>
                                    </div>
                                @endguest

                                <div class="htc__shopping__cart">
                                    <a class="cart__menu"><i class="icon-handbag icons"></i></a>
                                    <a class="cart__menu" href="#"><span class="htc__qua">{{Cart::count()}}</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->

        <!-- Start Cart Panel (right cart panel)-->

        @php
            $cont = Cart::content();
        @endphp
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    @foreach($cont as $row)
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="{{asset($row->options->image)}}" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2 id="pname"></h2>
                            <span class="quantity">QTY: {{ $row->qty }}</span>
                            <span class="shp__price">${{ $row->price }}</span>
                        </div>
                        <div class="remove__btn">
                            <a href="{{ url('remove/cart/'.$row->rowId)}}" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    @endforeach

{{--                    <div class="shp__single__product">--}}
{{--                        <div class="shp__pro__thumb">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{asset('public/frontend/images/product-2/sm-smg/2.jpg')}}" alt="product images">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="shp__pro__details">--}}
{{--                            <h2><a href="#">Brone Candle</a></h2>--}}
{{--                            <span class="quantity">QTY: 1</span>--}}
{{--                            <span class="shp__price">$25.00</span>--}}
{{--                        </div>--}}
{{--                        <div class="remove__btn">--}}
{{--                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$ {{ Cart::subtotal() }}</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="{{ url('view/cart/') }}">View Cart</a></li>
                    <li class="shp__checkout"><a href="{{ route('checkout.product') }}">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->

@yield('content')


<!-- Start Footer Area -->
    <footer id="htc__footer">
        <!-- Start Footer Widget -->
        <div class="footer__container bg__cat--1">
            <div class="container">
                <div class="row">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer">
                            <h2 class="title__line--2">ABOUT US</h2>
                            <div class="ft__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                <div class="ft__social__link">
                                    <ul class="social__link">
                                        <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                        <div class="footer">
                            <h2 class="title__line--2">information</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Terms  & Condition</a></li>
                                    <li><a href="#">Manufactures</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">my account</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">My Cart</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">Our service</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">My Cart</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">NEWSLETTER </h2>
                            <div class="ft__inner">
                                <form action="{{ route('store.newsletter') }}" method="post">
                                    @csrf
                                    <div class="news__input form-group">
                                        <input type="email" name="email" placeholder="Your Mail*" required>
                                    </div>
                                    <div class="send__btn">
                                        <button type="submit" class="btn fr__btn">Subscribe</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
        </div>
        <!-- End Footer Widget -->
        <!-- Start Copyright Area -->
        <div class="htc__copyright bg__cat--5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright__inner">
                            <p>Copyright© <a href="#">Online Broad PC Centre.</a>. All right reserved. <script>document.write(new Date().getFullYear());</script>.</p>
                            <a href="#"><img src="{{asset('public/frontend/images/others/shape/paypol.png')}}" alt="payment images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>
    <!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('public/frontend/js/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('public/frontend/js/bootstrap.min.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('public/frontend/js/plugins.js')}}"></script>
<script src="{{ asset('public/frontend/js/slick.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints.min.js. -->
<script src="{{ asset('public/frontend/js/waypoints.min.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('public/frontend/js/main.js')}}"></script>


<!-- For toastr sweet alert message -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>



<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });
</script>

</body>

</html>
