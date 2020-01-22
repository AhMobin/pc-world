@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Focus View</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">View <span style="color: gray">{{ $viewfocus->focus_title }}</span> Focus</h6>   

                <div class="modal-body pd-20">
                    <div class="form-group">
                        <label for="FocusTitle">Focus Title</label>
                        <input type="text" class="form-control" value="{{ $viewfocus->focus_title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="FocusDescription">Focus Description</label>
                        <textarea class="form-control" readonly>{{ $viewfocus->focus_desc }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="FocusImage">Current Focus Image</label><br>
                        <img src="{{ URL::to($viewfocus->focus_image) }}" alt="" height="150" width="250">
                    </div>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary pd-x-20" href="{{ route('our.focus.panel') }}">Back</a>
                </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
