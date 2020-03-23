<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

        return view('pages.cart')->with([
            'categories' => $categories,
            ]);
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

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->id;
        });

        if($duplicates->isNotEmpty()){
            toast('Item is already in your cart!','warning');
            return redirect()->route('cart.index');
        }

        $validation = Validator::make($request->all(),[
            'quantity' => 'required|numeric',
        ]);

        $qty = $request->input('quantity');
        $str = $request->input('strength');
        $size = $request->input('size');
        $id = $request->id;

        $info = Product::find($id);

        if($validation->fails()){
            return back()->with('errors', 'Qty must be a number');
        }elseif($qty > $info->quantity){
            return back()->with('errors', 'Qty is exceeding the stock');
        }else{

            $data['qty']=$qty;
            $data['id']=$info->id;
            $data['name']=$info->name;
            $data['price']=$info->price;
            $data['weight']=0;
            $data['options']['image']=$info->display_image;
            $data['options']['size']=$size;
            $data['options']['strength']=$str;

            Cart::add($data);

            return redirect()->route('cart.index');
        }
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

        $validation = Validator::make($request->all(),[
            'quantity' => 'required|numeric',
        ]);

        $qty = $request->input('quantity');
        $proId = $request->proId;

        $product = Product::find($proId);

        $quantity = $product->quantity;

        if($qty <= $quantity){
            Cart::update($id, $request->quantity);
            toast('Cart Updated','success');
            return back();
        }else{
            toast('Exceeding Quantity of Available stocks','warning');
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        alert()->success('Done!','Successfully Deleted the Item');
        return back();
    }
}
