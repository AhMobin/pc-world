@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Featured Reviews Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">View Product Review</h6>

                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="reviewTitle">Featured Product Title</label>
                            <input type="text" class="form-control" value="{{ $review->feature_title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="review">Featured Review</label>
                            <textarea class="form-control" readonly>{{ $review->feature_review }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="reviewButton">Featured Button</label>
                            <input type="text" class="form-control" value="{{ $review->feature_btn }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="reviewButtonLink">Featured Button Link</label>
                            <input type="text" class="form-control" value="{{ $review->feature_btn_link }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="reviewProductImage">Featured Image</label><br>
                            <img src="{{ url($review->feature_image) }}" alt="" height="120" width="200">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a class="btn btn-secondary pd-x-20" href="{{ route('views.featured.reivews') }}">Back</a>
                    </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
