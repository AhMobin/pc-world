@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Sub-Category Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Sub-Categories List
                    <a href="" class="btn btn-sm btn-warning my-2" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add New</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-20p">Sub-Category Name</th>
                            <th class="wd-20p">Sub-Category Slug</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subcate as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ $row -> category_name }}</td>
                                <td>{{ $row -> sub_category_name }}</td>
                                <td>{{ $row -> sub_category_slug }}</td>
                                <td>
                                    <a href="{{ URL::to('subcategory/edit/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ URL::to('subcategory/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger">Delete</a>
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
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Subcategory Add</h6>
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

                    <form action="{{ route('store.subcategories') }}" method="post">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="subCategoryName">Sub-Category Name</label>
                                <input type="text" class="form-control" name="sub_category_name">
                            </div>
                            <div class="form-group">
                                <label for="subCategorySlug">Sub-Category Slug</label>
                                <input type="text" class="form-control" name="sub_category_slug">
                            </div>
                            <div class="form-group">
                                <label for="underCategory">Parent Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($category as $row)
                                        <option value="{{ $row -> id }}">{{ $row -> category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info pd-x-20">Add Subcategory</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
@endsection
