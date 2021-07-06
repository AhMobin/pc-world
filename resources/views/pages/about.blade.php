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
                                <h2 style="color: #f2dede; text-align: left; font-weight: bold">About US</h2>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

{{--    <img src="{{ asset('public/frontend/images/about/avatar.png') }}" alt="" width="180" height="160">--}}

    <section class="mtb--40">
        <div class="pt--30 pb--50">
            <h2 style="font-weight: bold;font-size: 2.5rem; text-align: center;">Our Skilled Developers</h2>
        </div>
        <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="max-width: 200px; float: left;">
                        <img src="{{ asset('public/frontend/images/about/01.jpg') }}" alt="" style="border-radius: 50%">
                    </div>
                    <div style="float: right; line-height: 2rem;">
                        <h2>Md. Mehedi Imam</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p> -->
                        <div style="width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%; float: left">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                            </ul>
                            <ul style="list-style: circle; margin-left: 5%; float: right">
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>MySQL</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: auto;">

        <!-- <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="width:600px ; float: left;  line-height: 2rem;">
                        <h2>Mobassher Rashedi</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p>
                        <div style="width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%; float: left">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                            </ul>
                            <ul style="list-style: circle; margin-left: 5%; float: right">
                                <li>jQuery</li>
                                <li>AJAX</li>
                            </ul>
                        </div>

                    </div>
                    <div style="max-width: 200px ; float: right;">
                        <img src="{{ asset('public/frontend/images/about/avatar.png') }}" alt="" style="border-radius: 50%">
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: auto;"> -->

        <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="max-width: 200px ; float: right;">
                        <img src="{{ asset('public/frontend/images/about/tanzil.jpeg') }}" alt="" style="border-radius: 50%">
                    </div>
                    <div style="width:600px ; float: right; line-height: 2rem;">
                        <h2>Tanzil Mahmud</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p> -->
                        <div style="width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%; float: left">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>jQuery</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: auto;">

        <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="float: right; line-height: 2rem;">
                        <h2>Zerin Sultana Laboni</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p> -->
                        <div style="max-width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%;">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>jQuery</li>
                            </ul>
                        </div>

                    </div>
                    <div style="max-width: 200px ; float: left;">
                        <img src="{{ asset('public/frontend/images/about/zerin.jpeg') }}" alt="" style="border-radius: 50%">
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: auto;">

        <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="width:600px ; float: left;  line-height: 2rem;">
                        <h2>Sohada Akter</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p> -->
                        <div style="width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%; float: left">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>jQuery</li>
                            </ul>
                        </div>

                    </div>
                    <div style="max-width: 200px; float: left;">
                        <img src="{{ asset('public/frontend/images/about/sohada.jpg') }}" alt="" style="border-radius: 50%">
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: auto;">

        <div class="container mtb--30">
            <div style="max-width: 850px; margin: auto">
                <div class="developer">
                    <div style="max-width:600px ; float: right;  line-height: 2rem; margin-left: 20px">
                        <h2>Prapti Achariya</h2>
                        <span style="color: red">Graduated From Eastern University</span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, harum hic nostrum officia quasi quibusdam soluta tempore? Commodi.</p> -->
                        <div style="width: 200px; margin-top: 20px;">
                            <p>Skills:</p>
                            <ul style="list-style: circle; margin-left: 10%; float: left">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                            </ul>
                        </div>
                    </div>
                    <div style="max-width: 200px; float: left;">
                        <img src="{{ asset('public/frontend/images/about/prapti.jpeg') }}" alt="" style="border-radius: 50%">
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection
