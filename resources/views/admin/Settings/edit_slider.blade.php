@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Slider Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Edit Slider</h6>


                <form action="{{ url('update/slider/'.$slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="brandingLogo">Slider Title</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_title }}" name="slider_title">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Sub-description</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_subdesc }}" name="slider_subdesc">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Description</label>
                            <textarea class="form-control" name="slider_description">{{ $slider->slider_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Button Link</label>
                            <input type="text" class="form-control" name="slider_btn_link" value="{{ $slider->slider_btn_link}}">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Current Slider Image</label><br>
                            <img src="{{ url($slider->slider_image) }}" alt="" height="120" width="200">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Current Slider Image</label><br>
                            <input type="file" class="form-control" name="slider_image">
                            <input type="hidden" name="old_slider" value="{{ $slider->slider_image }}">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pd-x-20">Update</button>
                        <a class="btn btn-secondary pd-x-20" href="{{ route('view.sliders') }}">Back</a>
                    </div>
                </form>


            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
