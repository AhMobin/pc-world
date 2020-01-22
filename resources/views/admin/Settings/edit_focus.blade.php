@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Focus Edit</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Edit {{ $singlefocus->focus_title }}</h6>   


                <form action="{{ url('update/focus/'.$singlefocus->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="focusTitle">Focus Title</label>
                            <input type="text" class="form-control" value="{{ $singlefocus->focus_title }}" name="focus_title">
                        </div>
                        <div class="form-group">
                            <label for="focusDescription">Focus Description</label>
                            <textarea class="form-control" name="focus_desc">{{ $singlefocus->focus_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="focusImage">Current Focus Image</label><br>
                            <img src="{{ URL::to($singlefocus->focus_image) }}" alt="" height="120" width="200">
                            <input type="hidden" name="old_focus" value="{{ $singlefocus->focus_image }}">
                        </div>
                        <div class="form-group">
                            <label for="focusImageUpload">Upload New Focus Image</label><br>
                            <input type="file" class="form-control" name="focus_image">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pd-x-20">Update</button>
                        <a class="btn btn-secondary pd-x-20" href="{{ route('our.focus.panel') }}">Back</a>
                    </div>
                </form>
                

        </div><!-- card -->
    </div><!-- sl-pagebody -->
</div>

@endsection
