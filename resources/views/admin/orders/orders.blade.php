@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('content')
<div class="row">
    <div class="col-md-12 text-center">
<!-- TABLE: LATEST ORDERS -->
<div class="card mx-5 my-5">
<div class="card-header border-transparent">
    <h3 class="card-title">Latest Orders</h3>
</div>
<!-- /.card-header -->
<div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-bordered table-hover m-0">
        <thead>
        <tr>
        <th>Order ID</th>
        <th>Item</th>
        <th>Status</th>
        <th>Payment</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        @if(count($orders)>0)
        @foreach ($orders as $order)
        <tbody>
        <tr>
        <td><a href="pages/examples/invoice.html">{{ $order->id }}<a></td>
        <td>{{ $order->billing_fname }} {{ $order->billing_lname}}</td>
        <td><span class="badge badge-success">{{ $order->status}}</span></td>
        <td>{{ $order->payment_gateway}}</td>
        <td>
            <div></div>
        </td>
        <td>
            <div></div>
        </td>
        <td>
            <div></div>
        </td>
        </tr>
        @endforeach

      @else
        <div class="alert-success text-center" role="alert">
            <h6 clas>No Orders Listed</h6>
        </div>
    @endif
        </tbody>
    </table>
    {{ $orders->links() }}
    </div>
    <!-- /.table-responsive -->
</div>
<!-- /.card-body -->
<!-- /.card-footer -->

</div>
    </div>
</div>

@endsection

@section('script')

@endsection
