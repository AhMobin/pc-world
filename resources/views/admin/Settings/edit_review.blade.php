@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Reviews Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Edit Review</h6>


                <form action="{{ url('update/feature/review/'.$review->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="brandingLogo">Review Product Title</label>
                            <input type="text" class="form-control" name="feature_title" value="{{ $review->feature_title }}">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Featured Product Review</label>
                            <textarea class="form-control" name="feature_review">{{ $review->feature_review }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="reviewButon">Review Button</label>
                            <input type="text" class="form-control" name="feature_btn" value="{{ $review->feature_btn }}">
                        </div>
                        <div class="form-group">
                            <label for="reviewButonLink">Review Button Link</label>
                            <input type="text" class="form-control" name="feature_btn_link" value="{{ $review->feature_btn_link }}">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Current Featured Image</label><br>
                            <img src="{{ url($review->feature_image) }}" alt="" height="120" width="200">
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Current Featured Image</label><br>
                            <input type="file" class="form-control" name="feature_image">
                            <input type="hidden" name="old_review" value="{{ $review->feature_image }}">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pd-x-20">Update</button>
                        <a class="btn btn-secondary pd-x-20" href="{{ route('views.featured.reivews') }}">Back</a>
                    </div>
                </form>


            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
