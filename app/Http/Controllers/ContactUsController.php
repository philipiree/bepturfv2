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

        $categories = Category::all();

        return view('pages.contact-us')->with([
            'categories' => $categories,
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
