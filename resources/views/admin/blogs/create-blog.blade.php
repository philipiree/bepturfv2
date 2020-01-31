@extends('layouts.master')


@section('title')
    Create Post
@endsection


@section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-10 mx-auto">
             <div class="card">
                 <div class="card-header text-center">
                     <h1>Create Post</h1>
                 </div>
                 <hr>
                 <div class="card-body">
                     <div class="row justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['action' =>'BlogsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{ Form::label('title', 'Title') }}
                                    {{ Form::text('title', '', ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description', '', ['id' => 'editor1', 'class'=> 'form-control']) }}
                                </div>
                                    {{ Form::file('display_image') }}
                                <div class="text-center">
                                {{ Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                                </div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection

@section('scripts')

@endsection
