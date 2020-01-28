@extends('layouts.master')


@section('title')
    Edit Product
@endsection

@section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-10 mx-auto">
             <div class="card">
                 <div class="card-header text-center">
                     <h4 class="card-title text-center">Edit Product</h4>
                 </div>
                 <hr>
                 <div class="card-body">
                     <div class="row justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['action' =>['ExpensesController@update', $expense->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    {{ Form::hidden('_method','PUT') }}
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', $expense->name, ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('flavor', 'Flavor') }}
                                    {{ Form::date('date', $expense->entry_date, ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('maker', 'Maker') }}
                                    {{ Form::number('amount', $expense->amount, ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description', $expense->description, ['id' => 'editor', 'class'=> 'form-control']) }}
                                </div>
                                <div class="text-center">
                                {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
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
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
@endsection
