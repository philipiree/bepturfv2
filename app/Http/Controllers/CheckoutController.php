<?php

namespace App\Http\Controllers;

use Cart;
use App\Order;
use App\Product;
use App\Category;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {

            $categories = Category::all();
            return view('pages.checkout')->with([
                'categories' => $categories,
                'data' => Cart::content(),
                ]);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip' => 'required|digits:4',
            'phone' => 'required|max:11',
        ]);

        $contents = Cart::content()->map(function($item){
            return $item->qty;
        })->values()->toJson();

        //inserting into orders table


        $order = new Order;
        $order->user_id = auth()->user() ? auth()->user()->id : null;
        $order->billing_email = $request->input('email');
        $order->billing_fname = $request->input('fname');
        $order->billing_lname = $request->input('lname');
        $order->billing_address = $request->input('address');
        $order->billing_city = $request->input('city');
        $order->billing_province = $request->input('province');
        $order->billing_zip = $request->input('zip');
        $order->billing_phone = $request->input('phone');
        $order->billing_instructions = $request->input('instructions');

        $order->billing_subtotal =  str_replace(',','',Cart::subtotal());
        $order->billing_total =   str_replace(',','',Cart::total());

        $order->save();

        //inserting into order product table

        foreach(Cart::content() as $item){

            $product = new OrderProduct;
            $product->order_id = $order->id;
            $product->product_id = $item->id;
            $product->strength = $item->options->strength;
            $product->quantity = $item->qty;
            $product->size = $item->options->size;
            $product->name = $item->name;

            $product->save();
        }
        // Decrease QTY of Product
        $this->decreaseQty();
        //SUCCESSFUL ORDER
        Cart::instance('default')->destroy();
        alert()->success('Thank You!','Your order is complete!');
        return redirect()->route('pages.collections');
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

    protected function decreaseQty(){

        foreach (Cart::content() as $item){
            $product = Product::find($item->id);

            $product->update(['quantity'=> $product->quantity - $item->qty]);
        }
    }

    public function search(Request $request)
    {
        $categories = Category::all();

        // $request->validate([
        //     'query' => 'required|min:3',
        // ]);

        $this->validate($request, [
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")
                                  ->orWhere('flavor', 'like', "%$query%")
                                  ->orWhere('maker', 'like', "%$query%")
                                  ->orWhere('description', 'like', "%$query%")
                                  ->orWhere('strength', 'like', "%$query%")
                                  ->orWhere('price', 'like', "%$query%")
                                  ->paginate(8);

        session()->put('previousUrl', url()->previous());

        return view('pages.search-results')->with([

            'products' => $products,
            'categories' => $categories,
            ]);
    }
}
