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

                <table id="example2" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Expense Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Description</th>

                        </tr>
                    </thead>
                <tbody>

                    <tr>
                        <td class="text-center">{{$expense->id}}</td>
                        <td>{{$expense->name}}</td>
                        <td>{{$expense->entry_date}}</td>
                        <td>{{$expense->amount}}</td>
                        <td>{{$expense->description}}</td>
                    </tr>
                </tbody>
            </table>

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
