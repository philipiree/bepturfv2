@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-9">


    </div>
</div>

<div class="card my-5 mx-5">
    <div class="card-header">
        Monthly report
    </div>

    <div class="card-body">
        <div class="row">
            <div>
                <h3 class="page-title mx-2">Reports</h3>
                <form method="get" class="mx-2">
                    <div class="row">
                        <div class="col-4 form-group">
                            <label class="control-label" for="y">Year</label>
                            <select name="y" id="y" class="form-control">
                                @foreach(array_combine(range(date("Y"), 2000), range(date("Y"), 2000)) as $year)
                                    <option value="{{ $year }}" @if($year===old('y', Request::get('y', date('Y')))) selected @endif>
                                        {{ $year }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 form-group">
                            <label class="control-label" for="m">Month</label>
                            <select name="m" for="m" class="form-control">
                                @foreach(cal_info(0)['months'] as $month)
                                    <option value="{{ $month }}" @if($month===old('m', Request::get('m', date('m')))) selected @endif>
                                        {{ $month }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="control-label">&nbsp;</label><br>
                            <button class="btn btn-primary" type="submit">Filter Date</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Expense Name</th>
                        <th>Amount</th>
                    </tr>
                    @foreach($expensesSummary as $inc)
                        <tr>
                            <td>{{ $inc['name'] }}</td>
                            <td>{{ number_format($inc['amount'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="table-info">
                        <th>Total Expenses</th>
                        <th>{{ number_format($expensesTotal, 2) }}</th>
                    </tr>
                </table>
            </div>
        </div>



    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "{{ config('panel.date_format_js') }}"
      })
</script>
@stop
