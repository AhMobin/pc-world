@extends('admin.admin_layouts')
@section('admin_content')


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>UPDATE PROFILE</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">{{ $admin->name }}</h6>

            <form action="{{ url('update/profile/'.$admin->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name:</label>
                                <input class="form-control" type="text" name="name" value="{{ $admin->name }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Phone Number:</label>
                                <input class="form-control" type="text" name="phone" value="{{ $admin->phone }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email address:</label>
                                <input class="form-control" type="text" name="email" value="{{ $admin->email }}">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Update Profile Photo:</label>
                                <input class="form-control" type="file" name="admin_photo">
                                <input type="hidden" name="old_photo" value="{{$admin->admin_photo}}">
                            </div>
                        </div><!-- col-4 -->

                        @if($admin->admin_photo != NULL)
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Current Profile Image:</label><br>
                                    <img src="{{ asset($admin->admin_photo) }}" alt="" width="70" height="60">
                                </div>
                            </div><!-- col-4 -->
                        @endif


                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Update</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
</div>

@endsection
