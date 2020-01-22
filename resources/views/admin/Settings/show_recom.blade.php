@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Recommendation View</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">View <span style="color: gray">{{ $show->recom_title }}</span></h6>   

                <div class="modal-body pd-20">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="recomTitle">Recommendation Title</label>
                                <input type="text" class="form-control" value="{{ $show->recom_title }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="cpu">CPU</label>
                                <input type="text" class="form-control" value="{{ $show->cpu }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="motherboard">Motherboard</label>
                                <input type="text" class="form-control" value="{{ $show->motherboard }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ram">RAM</label>
                                <input type="text" class="form-control" value="{{ $show->ram }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="gpu">GPU</label>
                                <input type="text" class="form-control" value="{{ $show->gpu }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="storage">Storage</label>
                                <input type="text" class="form-control" value="{{ $show->storage }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" value="{{ $show->price }}" readonly>
                                </div>
                            <div class="form-group">
                                <label for="image">Featured Image</label><br>
                                <img src="{{ url($show->recom_image) }}" height="140" width="160">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary pd-x-20" href="{{ route('our.recommendation') }}">Back</a>
                </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
