@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Admin Profile - #ID{{ $admin->id }}</h5>
            </div><!-- sl-page-title -->


            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Admin Profile Details </h6>
                <div style="margin-top: 50px;"></div>

                <div class="table-responsive">
                    <table class="table mg-b-0">
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $admin->name }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $admin->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $admin->email }}</td>
                        </tr>
                        <tr>
                            <th>Profile Image</th>
                            <td>
                                @if($admin->admin_photo == NULL)
                                    <span style="color: maroon">Profile Picture Not Available. Upload A Photo</span>
                                @else
                                    <img src="{{ url($admin->admin_photo) }}" alt="" height="60" width="70">
                                 @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="{{ url('edit/admin/profile/'.$admin->id) }}" class="btn btn-primary">UPDATE PROFILE</a>
                                <a href="{{ url('admin/home') }}" class="btn btn-dark" style="float: right;">BACK TO DASHBOARD</a>
                            </td>

                        </tr>
                    </table>
                </div>
            </div><!-- card -->
        </div>
    </div>

@endsection
