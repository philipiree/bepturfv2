@extends('layouts.master')


@section('title')
    Announcement
@endsection


@section('content')
<div class="content">
    <div class="row">
      <div class="col-12 text-center">
        <div class="card my-5 mx-5">
            <div class="card-header">
            <h3 class="card-title">Blogs</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="/posts-create" class="btn btn-primary mx-auto">Add Post</a>
                <div class="table-responsive py-4">
                <table id="example2" class="table table-hover">
                    <thead>
                        <tr class="inline-block">
                            <th class="text-center">Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    @if(count($blogs)>0)
                    @foreach ($blogs as $blog)
                    <tr>
                        <td class="align-middle">{{ $blog->id }}</td>
                        <td >
                            <div class="p-2">
                                <img src="/storage/blog_images/{{ $blog->display_image }}" alt="" width="40" class="img-fluid rounded shadow-sm">
                                {{-- <a href="{{ route('pages.display', $item->id) }}"><img src="{{ asset('/storage/display_images'.$item->display_image) }}" alt=""></a> --}}
                              </div>
                        </td>

                        <td class="align-middle">
                            <a href={{ route('pages.display', $blog->id) }}> {{ $blog->title }}</a>
                        </td>
                        <td class="align-middle">{{ $blog-> created_at }}</td>
                        <td class="align-middle"><a href="/posts-edit/{{ $blog->id}}" class="btn btn-success">EDIT</a></td>
                        <td class="align-middle">
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$blog->id}})"
                            data-target="#DeleteModal" class="btn btn-danger btn-mini">DELETE</a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach

                @else
                <div class="alert alert-success" role="alert">
                    <h6>No Blogs</h6>
                </div>
                @endif
                </tbody>
            </table>
        </div>
        {{ $blogs->links() }}
            </div>
            <!-- /.card-body -->
            </div>
        </div>
        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                @foreach ($blogs as $blog)
                <form action="{{route('post.destroy', $blog->id)}}" id="deleteForm" method="POST">
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
                var url = '{{ route("post.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }

            function formSubmit()
            {
                $("#deleteForm").submit();
            }
        </script>
@endsection
