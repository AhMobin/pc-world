@extends('admin.admin_layouts')
@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Product Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Product List
                    <a href="{{ route('add.product') }}" class="btn btn-sm btn-warning my-2" style="float: right">Add New</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 10%">Product Name</th>
                            <th>Product Code</th>
                            <th>Product Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td style="width: 10%">{{ substr($row->product_name,0,10) }}</td>
                                <td>{{ $row->product_code }}</td>
                                <td class="text-center">
                                    <img src="{{ URL::to($row->product_image_one) }}" alt="" height="50" width="60">
                                </td>
                                <td>{{ $row->category_name }}</td>
                                <td>{{ $row->brand_name }}</td>
                                <td>{{ $row->selling_prize }}</td>
                                <td>
                                    @if($row->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('view/single/product/'.$row->id) }}" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>
                                    <a href="{{ URL::to('edit/product/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit" title="Edit"></i></a>
                                    <a href="{{ URL::to('product/delete/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    @if($row->status == 1)
                                        <a href="{{ URL::to('product/inactive/'.$row->id) }}" class="btn btn-sm btn-dark" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ URL::to('product/active/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

@endsection


