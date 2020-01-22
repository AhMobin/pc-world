@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Recommendation Products</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">All Recommendations
                    <a href="" class="btn btn-sm btn-warning my-2" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add Recommendation</a>
                </h6>   



                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Feature Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recom as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ $row -> recom_title }}</td>
                                <td><img src="{{ url($row -> recom_image) }}" height="50" width="60"></td>      
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-danger">Deactivated</span>
                                    @else
                                        <span class="badge badge-success">Activated</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('view/recommendation/'.$row->id) }}" class="btn btn-sm btn-success" title="View"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('recommendation/edit/'.$row->id) }}" class="btn btn-sm btn-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    @if($row->status == 0)
                                        <a href="{{ url('recommendation/activate/'.$row->id) }}" class="btn btn-sm btn-info" title="Activate"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                        <a href="{{ url('recommendation/deactivate/'.$row->id) }}" class="btn btn-sm btn-warning" title="Deactivate"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{ url('recommendation/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

                

                <div class="modal-footer">
                    <a class="btn btn-secondary pd-x-20" href="{{ url('admin/home') }}">Back</a>
                </div>

            </div><!-- card -->
        </div><!-- sl-pagebody -->


        <!-- add-new button model -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Recommendation</h6>
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

                    <form action="{{ route('add.recommendation.product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="title">Featured Title</label>
                                    <input type="text" class="form-control" name="recom_title">
                                </div>    
                                <div class="form-group">
                                    <label for="cpu">CPU</label>
                                    <input type="text" class="form-control" name="cpu">
                                </div>
                                <div class="form-group">
                                    <label for="motherboard">Motherboard</label>
                                    <input type="text" class="form-control" name="motherboard">
                                </div>
                                <div class="form-group">
                                    <label for="storage">Storage</label>
                                    <input type="text" class="form-control" name="storage">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="ram">RAM</label>
                                    <input type="text" class="form-control" name="ram">
                                </div>
                                <div class="form-group">
                                    <label for="gpu">GPU</label>
                                    <input type="text" class="form-control" name="gpu">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="image">Featured Image</label>
                                    <input type="file" class="form-control" name="recom_image">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Add Now</button>
                                </div>
                            </div>
                        </div>               
                    </div>
                </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>




@endsection
