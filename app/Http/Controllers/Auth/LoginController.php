<?php

namespace App\Http\Controllers\Auth;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    protected function redirectTo(){

        if(Auth::user()->usertype == 'admin'){
            return 'dashboard';
        }else{
            return '/collections';
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

        /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
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

        session()->put('previousUrl', url()->previous());

        return view('auth.login')->with([

            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            ]);
    }

    public function index()
    {

    }
}
