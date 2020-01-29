<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Expense;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->take(5);
        $orders = Order::all();
        $expenses = Order::all();
        $order = Order::all();




        $users = User::all();
        // $from = Carbon::now()->month;

        $from = Carbon::parse(sprintf(
            '%s-01-01',
            Carbon::today(),

        ));

        $to      = clone $from;
        $to->day = $to->daysInMonth;

        $expenses = Order::whereBetween('created_at', [$from, $to]);

        $expensesTotal   = number_format($expenses->sum('billing_total'),2);

        $totals = DB::table('order_product')->sum('quantity');





        return view('admin.dashboard')->with([
            'products' => $products,
            'orders'=>$orders,
            'expenses'=>$expenses,
            'expensesTotal' => $expensesTotal,
            'users' => $users,
            'totals' => $totals,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
