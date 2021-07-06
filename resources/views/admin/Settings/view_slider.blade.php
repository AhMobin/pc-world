@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Slider Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">View Slider</h6>

                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="brandingLogo">Slider Title</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Sub-description</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_subdesc }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Description</label>
                            <textarea class="form-control" readonly>{{ $slider->slider_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Button Link</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_btn}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Button Link</label>
                            <input type="text" class="form-control" value="{{ $slider->slider_btn_link}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Slider Image</label><br>
                            <img src="{{ url($slider->slider_image) }}" alt="" height="120" width="200">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a class="btn btn-secondary pd-x-20" href="{{ route('view.sliders') }}">Back</a>
                    </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
