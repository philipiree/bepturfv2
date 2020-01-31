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
            <h3 class="card-title">Messages</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive py-4">
                <table id="example2" class="table table-hover">
                    <thead>
                        <tr class="inline-block">
                            <th class="text-center">Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    @if(count($contacts)>0)
                    @foreach ($contacts as $contact)
                    <tr>
                        <td class="align-middle">{{ $contact->id }}</td>
                        <td class="align-middle"> {{ $contact->name }} </td>
                        <td class="align-middle"> {{ $contact->phone }} </td>
                        <td class="align-middle">
                            {{ Str::limit($contact->description, 50) }}
                        </td>
                        <td class="align-middle">{{ Carbon\Carbon::parse($contact->created_at)->format(' D M i Y ') }}</td>
                        <td><a href="/messages/{{ $contact->id}}" class="btn btn-info">View</a></td>
                        <td class="align-middle">
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$contact->id}})"
                            data-target="#DeleteModal" class="btn btn-danger btn-mini">DELETE </a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                 @endforeach

                @else
                <div class="alert alert-success" role="alert">
                    <h6>No Messages</h6>
                </div>
                @endif
                </tbody>
            </table>
        </div>
        {{ $contacts->links() }}
            </div>

            <!-- /.card-body -->
            </div>

        </div>
        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                @foreach ($contacts as $contact)
                <form action="{{route('product.destroy', $contact->id)}}" id="deleteForm" method="POST">
                @endforeach
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
                var url = '{{ route("message.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }

            function formSubmit()
            {
                $("#deleteForm").submit();
            }
        </script>
@endsection
