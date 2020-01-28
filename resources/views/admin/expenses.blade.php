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
            <h3 class="card-title">Expense List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="/create-expense" class="btn btn-primary mx-auto">Add Expense</a>
                <div class="table-responsive my-3">
                <table id="example2" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Expense Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                <tbody>
                    @if(count($expenses)>0)
                    @foreach ($expenses as $expense)
                    <tr>
                        <td>{{$expense->id}}</td>
                        <td>{{$expense->name}}</td>
                        <td>{{$expense->entry_date}}</td>
                        <td>{{$expense->amount}}</td>
                        <td>{{$expense->description}}</td>
                        <td><a href="/expenses-view/{{ $expense->id}}" class="btn btn-info">View</a></td>
                        <td><a href="/expenses/{{ $expense->id}}" class="btn btn-success">EDIT</a></td>
                        <td> <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$expense->id}})"
                            data-target="#DeleteModal" class="btn btn-danger btn-mini">DELETE </a>
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
        </div>
             <div>
            {{ $expenses->links() }}
            </div>
            </div>

            <!-- /.card-body -->
            </div>

        </div>
    </div>
    <div>
        </div>
        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">

                <form action="asdfadf   " id="deleteForm" method="POST">
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

@include('sweetalert::alert')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
        <script>
            $('.date').datepicker({
                autoclose: true,
                dateFormat: "{{ config('panel.date_format_js') }}"
            })
        </script>
        <script type="text/javascript">
            function deleteData(id)
            {
                var id = id;
                var url = '{{ route("expense.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }

            function formSubmit()
            {
                $("#deleteForm").submit();
            }
        </script>
@endsection
