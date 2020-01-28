<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::take(12);
        $expenses = $expenses->paginate(8);

        return view('admin.expenses', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expenses = Expense::all();

        return view('admin.create-expense', compact('expenses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);

        $expense = new Expense;
        $expense->name = $request->input('name');
        $expense->entry_date = $request->input('date');
        $expense->amount = $request->input('amount');
        $expense->description = $request->input('description');

        $expense->save();
        alert()->success('Done!','Successfully Added Expense');
        return redirect('/expenses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expenses = Expense::find($id);


        return view('admin.show-expenses')->with('expense', $expenses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expenses = Expense::find($id);

        return view('admin.edit-expenses')->with('expense', $expenses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);

        $expenses = Expense::find($id);
        $expenses->name = $request->input('name');
        $expenses->entry_date = $request->input('date');
        $expenses->amount = $request->input('amount');
        $expenses->description = $request->input('description');


        $expenses->save();
        alert()->success('Done!','Successfully Added Expense');
        return redirect('/expenses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expenses = Expense::findOrFail($id);
        $expenses->delete();
        alert()->success('Done!','Successfully Deleted the Item');
        return redirect('/expenses');
    }
}
