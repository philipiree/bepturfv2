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
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;


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

        //today
        $from = Carbon::parse(sprintf(
            '%s-01-01',
            Carbon::today(),
        ));
        $to = clone $from;
        $to->day = $to->daysInMonth;
        $expenses = Order::whereBetween('created_at', [$from, $to]);
        $expensesTotal = number_format($expenses->sum('billing_total'),2);
        $totals = DB::table('order_product')->sum('quantity');

        //Yesterday
        $fromYesterday = Carbon::parse(sprintf(
            '%s-01-01',
            Carbon::now()->subDays(2),
        ));
        $Two = clone $fromYesterday;
        $Two->day = $Two->daysInMonth;
        //Two Days Ago
        $twoDays = Carbon::parse(sprintf(
            '%s-01-01',
            Carbon::today()->subDays(2),
        ));
        $twoDaysAgo = clone $twoDays;
        $twoDaysAgo->day = $twoDays->daysInMonth;

        //Chart

        $cToday = $expenses->sum('billing_total');
        //Yesterday Total
        $expensesOne = Order::whereBetween('created_at', [$fromYesterday, $Two]);
        $cYesterday = $expensesOne->sum('billing_total');

        //Two Days ago Total
        $expensesTwo = Order::whereBetween('created_at', [$twoDays, $twoDaysAgo]);
        $cTwoDaysAgo = $expensesTwo->sum('billing_total');
        //cToday = 1,250, cTwodaysAgo = 2,500, cYesterday

        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",

        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",


        ];

        $salesChart = LarapexChart::setType('bar')
        ->setSubtitle('3-day Sales')
        ->setTitle('Sales')
        ->setXAxis(['Two Days Ago', 'Yesterday', 'Today'])
        ->setGrid(true)
        ->setDataset([
            [
                'name'  => 'Two Days Ago',
                'data'  =>  [$cTwoDaysAgo]
            ],
            [
                'name'  => 'Yesterday',
                'data'  =>  [$cYesterday]
            ],
            [
                'name'  => 'Today',
                'data'  =>  [$cToday]
            ],

        ])
        ->setStroke(2);


        return view('admin.dashboard.dashboard')->with([
            'products' => $products,
            'orders'=>$orders,
            'expenses'=>$expenses,
            'expensesTotal' => $expensesTotal,
            'users' => $users,
            'totals' => $totals,
            'blogs' => $blogs,
            'contacts' => $contacts,
            'salesChart' => $salesChart,
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
