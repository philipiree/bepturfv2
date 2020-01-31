<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use App\User;
use App\Order;
use App\Contact;
use App\Expense;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        $orders = Order::all();
        $expenses = Order::all();
        $order = Order::all();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(5);

        $users = User::all();
        // $from = Carbon::now()->month;

        $from = Carbon::parse(sprintf(
            '%s-01-01',
            Carbon::today(),

        ));
        $to = clone $from;
        $to->day = $to->daysInMonth;

        $expenses = Order::whereBetween('created_at', [$from, $to]);
        $expensesTotal = number_format($expenses->sum('billing_total'),2);
        $totals = DB::table('order_product')->sum('quantity');

        return view('admin.dashboard.dashboard')->with([
            'products' => $products,
            'orders'=>$orders,
            'expenses'=>$expenses,
            'expensesTotal' => $expensesTotal,
            'users' => $users,
            'totals' => $totals,
            'blogs' => $blogs,
            'contacts' => $contacts,
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
