@extends('admin.admin_layouts')
@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Brand Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Brand Update</h6>

                <div class="table-wrapper">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL::to('update/brand/'.$brand->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="brandName">Brand Name</label>
                                <input type="text" class="form-control" name="brand_name" value="{{ $brand->brand_name }}">
                            </div>

                            <div class="form-group">
                                <label for="newBrandLogo">New Brand Logo</label>
                                <input type="file" class="form-control" name="brand_logo">
                            </div>

                            <div class="form-group">
                                <label for="prevBrandLogo">Current Brand Logo</label>
                                <img src="{{ URL::to($brand->brand_logo) }}" alt="" height="100" width="120">
                                <input type="hidden" name="prev_logo" value="{{ $brand->brand_logo }}">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Brand Update</button>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

@endsection


