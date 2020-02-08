<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(){
        if(request()->category){

            $products = Product::with('categories')->whereHas('categories', function($query){
            $query->where('name', request()->category);
            });
            $categories = Category::all();
            $categoryName = optional($categories->where('name', request()->category)->first())->name;

        }else{
            //$products = Product::where('featured', true);
            $products = Product::take(12);
            $categories = Category::all();
            $categoryName = 'Featured';
        }


        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(8);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(8);
        }elseif(request()->sort == 'a_z'){
            $products = $products->orderBy('name')->paginate(8);
        }elseif(request()->sort == 'z_a'){
            $products = $products->orderBy('name','desc')->paginate(8);
        }elseif(request()->sort == 'n_o'){
            $products = $products->orderBy('created_at')->paginate(8);
        }elseif(request()->sort == 'o_n'){
            $products = $products->orderBy('created_at','desc')->paginate(8);
        }else{
            $products = $products->paginate(8);
        }

        return view('pages.contact-us')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->description = $request->input('description');

        $contact->save();

        alert()->success('Done!','Successfully Submitted');
        return back();
    }

    public function index(){

        $contacts = Contact::orderBy('created_at','desc')->paginate(10);

        return view('admin.messages.msg')->with('contacts', $contacts);
    }

    public function show($id)
    {
        $contacts = Contact::find($id);

        return view('admin.messages.msg-view')->with('contacts', $contacts);
    }

    public function destroy($id)
    {
        $messages = Contact::findOrFail($id);
        $messages->delete();
        alert()->success('Done!','Successfully Deleted the Message');
        return redirect('/inqueries');
    }
}
