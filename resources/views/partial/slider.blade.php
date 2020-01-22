@php
    $sliders = DB::table('sliders')->where('status',1)->get();
@endphp

<div class="slider__container slider--one bg__cat--3 carousel slide">
    <div class="slide__container slider__activation__wrap owl-carousel">

        @foreach($sliders as $slide)
        <!-- Start Single Slide -->
            <div class="single__slide animation__style01 slider__fixed--height"
                 style="background: url('{{asset($slide->slider_image)}}');
                     background-size: cover;
                     background-repeat: no-repeat;
                     height: 90vh;
                     background-position: center center; ">

                <div class="container">
                    <div class="row align-items__center">
                        <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                            <div class="slide">
                                <div class="slider__inner">
                                    <h2>{{ $slide->slider_title }}</h2>
                                    <p>{{ $slide->slider_subdesc }}</p>
                                    <p style="color: gray; font-size: 1.2rem; font-weight: normal; font-family: Arial, Helvetica, sans-serif">{{ $slide->slider_description }}</p>
                                    <div class="cr__btn">
                                        <a href="{{ $slide->slider_btn_link }}">{{ $slide->slider_btn }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
    {{--                        <div class="slide__thumb">--}}
    {{--                            <img src="" alt="slider images">--}}
    {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Single Slide -->
        @endforeach
    </div>
</div>

<script>

</script>
