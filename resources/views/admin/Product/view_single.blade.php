@extends('admin.admin_layouts')
@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Product View</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Product Details. #{{ $single->id }}</h6>

{{--                <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name:</label>
                                    <input class="form-control" type="text" value="{{ $single->product_name }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Slug:</label>
                                    <input class="form-control" type="text" value="{{ $single->product_slug }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code:</label>
                                    <input class="form-control" type="text" value="{{ $single->product_code }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Quantity:</label>
                                    <input class="form-control" type="text" value="{{ $single->product_quantity }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category Name:</label>
                                    <input class="form-control" type="text" value="{{ $single->category_name }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Sub Category Name:</label>
                                    <input class="form-control" type="text" value="{{ $single->sub_category_name }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Brand Name:</label>
                                    <input class="form-control" type="text" value="{{ $single->brand_name }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Model:</label><br>
                                    <input class="form-control" type="text" value="{{ $single->product_model }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Size:</label><br>
                                    <input class="form-control" type="text" value="{{ $single->product_size }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Color:</label><br>
                                    <input class="form-control" type="text" value="{{ $single->product_color }}" readonly>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Selling Price: (BDT)</label>
                                    <input class="form-control" type="text" value="{{ $single->selling_prize }}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group p-3" style="border: 1px solid grey">
                                    <label><b>Product Details</b></label>
                                    <p>{!! $single->product_details !!}</p>
                                </div>
                            </div>

                            <div class="col-lg-12 my-5">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link</label>
                                    <span class="badge badge-danger"><a href="{{ $single->video_link }}">Click Here</a></span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label>Image One (Main Thumbnail)</label><br>
                                <img src="{{ URL::to($single->product_image_one) }}" alt="" height="140" width="180">
                            </div>
                            <div class="col-lg-4">
                                <label>Image Two</label><br>
                                <img src="{{ URL::to($single->product_image_two) }}" alt="" height="140" width="180">
                            </div>
                            <div class="col-lg-4">
                                <label>Image Three</label><br>
                                <img src="{{ URL::to($single->product_image_three) }}" alt="" height="140" width="180">
                            </div>
                        </div><!-- row -->
                        <br>

                        <div class="form-layout-footer">
                            <a href="{{ URL::to('go/back') }}" class="btn btn-info mg-r-5">Back</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
{{--                </form>--}}
            </div><!-- card -->
        </div><!-- sl-pagebody -->

@endsection
