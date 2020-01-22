@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Logo Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Logos List
                    <a href="" class="btn btn-sm btn-warning my-2" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add Logo</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Branding Logo</th>
                            <th class="wd-20p">Status</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($logos as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>
                                    <img src="{{ url($row->branding_logo) }}" alt="" height="60">
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-danger">Deactivated</span>
                                    @else
                                        <span class="badge badge-success">Activated</span>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <a href="{{ url('logo/activate/'.$row->id) }}" class="btn btn-sm btn-info" title="Activate"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                        <a href="{{ url('logo/deactivate/'.$row->id) }}" class="btn btn-sm btn-info" title="Deactivate"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{ URL::to('logo/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Branding Logo Upload</h6>
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

                    <form action="{{ route('change.logo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="brandingLogo">Upload Logo</label>
                                <input type="file" class="form-control" name="branding_logo">
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


