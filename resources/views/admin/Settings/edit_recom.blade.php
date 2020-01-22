@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Recommendation Edit</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Edit <span style="color: gray">{{ $edit->recom_title }}</span></h6>   

                <div class="modal-body pd-20">
                    <form action="{{ url('update/recommendation/'.$edit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="recomTitle">Recommendation Title</label>
                                    <input type="text" class="form-control" name="recom_title" value="{{ $edit->recom_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="cpu">CPU</label>
                                    <input type="text" class="form-control" name="cpu" value="{{ $edit->cpu }}">
                                </div>
                                <div class="form-group">
                                    <label for="motherboard">Motherboard</label>
                                    <input type="text" class="form-control" name="motherboard" value="{{ $edit->motherboard }}">
                                </div>
                                <div class="form-group">
                                    <label for="ram">RAM</label>
                                    <input type="text" class="form-control" name="ram" value="{{ $edit->ram }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="gpu">GPU</label>
                                    <input type="text" class="form-control" name="gpu" value="{{ $edit->gpu }}">
                                </div>
                                <div class="form-group">
                                    <label for="storage">Storage</label>
                                    <input type="text" class="form-control" name="storage" value="{{ $edit->storage }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{ $edit->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Current Image</label><br>
                                    <img src="{{ url($edit->recom_image) }}" height="100" width="120">
                                    <input type="hidden" name="old_recom" value="{{ $edit->recom_image }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload New Image</label><br>
                                    <input type="file" name="recom_image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Update Now</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary pd-x-20" href="{{ route('our.recommendation') }}">Back</a>
                </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
