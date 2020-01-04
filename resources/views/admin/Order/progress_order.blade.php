@extends('admin.admin_layouts')
@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Order Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Pending Order List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Payment Type</th>
                            <th class="wd-15p">Transaction ID</th>
                            <th class="wd-15p">Total Cart</th>
                            <th class="wd-20p">Shipping</th>
                            <th class="wd-20p">Tax</th>
                            <th class="wd-15p">Total</th>
                            <th class="wd-15p">Paid</th>
                            <th class="wd-15p">Date</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $row)
                            <tr>
                                <td>{{ $row->payment_type }}</td>
                                <td>{{ $row->tranx_id }}</td>
                                <td>$ {{ $row->subtotal_amount }}</td>
                                <td>$ {{ $row->shipping_charge }}</td>
                                <td>$ {{ $row->tax }}</td>
                                <td>$ {{ $row->total_amount }} <br>BDT {{ $row->total_amount*85 }} </td>
                                <td>{{ $row->paying_amount }}</td>
                                <td>{{ $row->date }}</td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($row->status == 1)
                                        <span class="badge badge-info">Paid</span>
                                    @elseif($row->status == 2)
                                        <span class="badge badge-secondary">In Process</span>
                                    @elseif($row->status == 3)
                                        <span class="badge badge-success">Delivered</span>
                                    @else
                                        <span class="badge badge-danger">Canceled</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('admin/view/order/'.$row->id) }}" class="btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>
@endsection


