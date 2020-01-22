@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Feature Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Feature List
                    <a href="" class="btn btn-sm btn-warning my-2" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add Feature</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Featured Title</th>
                            <th>Feature Review</th>
                            <th>Feature Button</th>
                            <th>Feature Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ substr($row -> feature_title,0,15).'...' }}</td>
                                <td><p>{!! substr($row -> feature_review,0,15).'...' !!}</p></td>
                                <td><a href="{{ $row -> feature_btn_link }}" class="badge badge-success">{{ $row -> feature_btn }}</a></td>
                                <td>
                                    <img src="{{ url($row->feature_image) }}" alt="" height="60">
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-danger">Deactivated</span>
                                    @else
                                        <span class="badge badge-success">Activated</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('feature/review/view/'.$row->id) }}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                    <a href="{{ URL::to('feature/review/edit/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    @if($row->status == 0)
                                        <a href="{{ url('feature/review/activate/'.$row->id) }}" class="btn btn-sm btn-success" title="Activate"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                        <a href="{{ url('feature/review/deactivate/'.$row->id) }}" class="btn btn-sm btn-warning" title="Deactivate"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{ URL::to('feature/review/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

        <!-- add-new button model -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Feature</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('add.featured.product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="FeatureTitle">Featured Title</label>
                                <input type="text" class="form-control" name="feature_title">
                            </div>
                            <div class="form-group">
                                <label for="featureDescription">Feature Review</label>
                                <textarea class="form-control" name="feature_review"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="FeatureButton">Featured Button</label>
                                <input type="text" class="form-control" name="feature_btn">
                            </div>
                            <div class="form-group">
                                <label for="FeatureButtonLink">Featured Button Link</label>
                                <input type="text" class="form-control" name="feature_btn_link">
                            </div>
                            <div class="form-group">
                                <label for="featureImage">Featured Image</label>
                                <input type="file" class="form-control" name="feature_image">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info pd-x-20">Upload</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>

@endsection
