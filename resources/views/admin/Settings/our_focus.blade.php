@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Focus Area</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">All Focus
                    <a href="" class="btn btn-sm btn-warning my-2" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add Focus</a>
                </h6>   



                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Focus Title</th>
                            <th>Focus Description</th>
                            <th>Focus Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($focus as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ $row -> focus_title }}</td>
                                <td><p>{!! substr($row -> focus_desc,0,50) !!}</p></td>
                                <td>
                                    <img src="{{ url($row->focus_image) }}" alt="" height="60">
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-danger">Deactivated</span>
                                    @else
                                        <span class="badge badge-success">Activated</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('focus/view/'.$row->id) }}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('focus/edit/'.$row->id) }}" class="btn btn-sm btn-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    @if($row->status == 0)
                                        <a href="{{ url('focus/active/'.$row->id) }}" class="btn btn-sm btn-info" title="Activate"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                        <a href="{{ url('focus/deactive/'.$row->id) }}" class="btn btn-sm btn-warning" title="Deactivate"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{ url('focus/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

                    <form action="{{ route('store.focus') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="brandingLogo">Focus Title</label>
                            <input type="text" class="form-control" name="focus_title">
                        </div>    
                        <div class="form-group">
                            <label for="brandingLogo">Focus Description</label>
                            <textarea class="form-control" name="focus_desc" maxlength="600"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="brandingLogo">Upload Focus Image</label><br>
                            <input type="file" class="form-control" name="focus_image">
                            <!-- focus panel height: 175px - width: 270px -->
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Add Focus</button>
                        </div>
                    </div>
                </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>




@endsection
