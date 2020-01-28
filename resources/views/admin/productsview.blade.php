@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('content')
<div class="content">
    <div class="row">
      <div class="col-12 text-center">
        <div class="card my-5 mx-5">
            <div class="card-header">
            <h3 class="card-title">Product Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="/create-product" class="btn btn-primary mx-auto">ADD PRODUCT</a>
                <div class="table-responsive">
                <table id="example2" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    @if(count($products)>0)
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <a href={{ route('pages.display', $product->id) }}> {{ $product->name }}</a>
                        </td>
                        <td>{{ $product->created_at }}</td>
                        <td><a href="/edit-product/{{ $product->id}}" class="btn btn-success">EDIT</a></td>
                        <td>
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$product->id}})"
                            data-target="#DeleteModal" class="btn btn-danger btn-mini">DELETE </a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach

                @else
                <div class="alert alert-success" role="alert">
                    <h6>No Product Listed</h6>
                </div>
                @endif
                </tbody>
            </table>
        </div>
        {{ $products->links() }}
            </div>

            <!-- /.card-body -->
            </div>

        </div>
        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">

                <form action="{{route('product.destroy', $product->id)}}" id="deleteForm" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <p>Are you sure you want to delete this item?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')


        <script type="text/javascript">
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
        </script>
@endsection
