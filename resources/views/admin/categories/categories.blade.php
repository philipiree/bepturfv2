@extends('layouts.master')
@section('title')
    Dashboard
@endsection

@section('content')
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="card my-5 mx-5">
              <div class="card-header">
                <h4 class="card-title text-center">Category List</h4>
                </div>
              <div class="card-body">
                <a href="/categories-create" class="btn btn-primary mx-auto">ADD CATEGORY</a>

                  <table class="table table-hover">
                    <thead class="text-center">
                        <tr class="">
                            <th>ID</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($categories as $category)
                      <tr>
                       <td>{{ $category->id }}</td>
                       <td>{{ $category->name }}</td>
                       <td><a href="/categories-edit/{{ $category->id }}" class="btn btn-success">EDIT</a></td>
                       <td>
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$category->id}})"
                                data-target="#DeleteModal" class="btn btn-danger btn-mini">DELETE </a>
                       </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
              </div>
              {{ $categories->links() }}
            </div>
          </div>
          <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">

                <form action="{{route('cart.destroy', $category->id)}}" id="deleteForm" method="POST">
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


        <script type="text/javascript">
            function deleteData(id)
            {
                var id = id;
                var url = '{{ route("category.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }

            function formSubmit()
            {
                $("#deleteForm").submit();
            }
        </script>
@endsection

