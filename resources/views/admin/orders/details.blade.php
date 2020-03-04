@extends('layouts.master')


@section('title')
    Expenses
@endsection


@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card my-5 mx-5">
            <div class="card-header">
            <h3 class="card-title">Product Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row"></div>
                <div class="table-responsive my-3">

                <ul>
                    @foreach ($products as $product)
                        <li style="margin-bottom:10px;">
                            <div>Product Id: {{ $product->id }} </div>
                            <div>Product Name: {{ $product->name }} </div>
                            <div>Product Price: {{ $product->price }} </div>
                            <div>Product Quantity: {{ $product->pivot->quantity }} </div>
                        </li>
                    @endforeach
                </ul>

        </div>
        <div>
            <a href="/expenses" class="btn btn-default mx-auto">Go back to list</a>
        </div>
    </div>
            </div>

            <!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
@include('sweetalert::alert')


        {{-- <script type="text/javascript">
            function deleteData(id)
            {
                var id = id;
                var url = '{{ route("product.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }

            function formSubmit()
            {
                $("#deleteForm").submit();
            }
        </script> --}}
@endsection
