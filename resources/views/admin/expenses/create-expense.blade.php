@extends('layouts.master')


@section('title')
    Create Expense
@endsection


@section('content')
@include('inc.messages')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-10 mx-auto">
             <div class="card">
                 <div class="card-header text-center">
                     <h1>Create Expense</h1>
                 </div>
                 <hr>
                 <div class="card-body">
                     <div class="row justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['action' =>'ExpensesController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{ Form::label('name', 'Expense Name') }}
                                    {{ Form::text('name', '', ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('entry', 'Entry Date') }}
                                    {{ Form::date('date', '', ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('amount', 'Amount') }}
                                    {{ Form::number('amount', '', ['class'=> 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description', '', ['id' => 'editor1', 'class'=> 'form-control']) }}
                                </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "{{ config('panel.date_format_js') }}"
      })
</script>
@endsection

