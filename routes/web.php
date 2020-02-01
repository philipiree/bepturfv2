<?php
use Gloudemans\Shoppingcart\Facades\Cart;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {


    return view('welcome');
});


Route::group(['middleware' => ['auth','admin']], function () {

    // Route::get('/dashboard', function () {
    // return view('admin.dashboard');
    // });

    Route::get('/dashboard', 'DashboardController@index');


    //registered users & role assignments
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@edit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@update');
    Route::delete('/role-delete/{id}','Admin\DashboardController@delete');

    //product routes resources
    Route::get('/listedproducts', 'ProductsController@index');
    Route::get('/create-product','ProductsController@create');
    Route::get('/edit-product/{id}','ProductsController@edit');
    Route::get('/delete-product/{id}','ProductsController@destroy')->name('product.destroy');;
    Route::resource('product', 'ProductsController');
    Route::get('/listedproducts/{id}', 'ProductsController@show');

    //categories routes
    Route::get('/categories-create','CategoriesController@create');
    Route::delete('/categories-delete/{id}','CategoriesController@destroy');
    Route::put('/categories-update/{id}','CategoriesController@update');
    Route::get('/categories', 'CategoriesController@index');
    Route::get('/categories-edit/{id}','CategoriesController@edit');
    Route::resource('category', 'CategoriesController');

    //order routes
    Route::get('/orders', 'OrdersController@index');
    Route::get('/orders-edit/{id}','OrdersController@edit');

    //expense routes
    Route::get('/expenses', 'ExpensesController@index');
    Route::get('/create-expense','ExpensesController@create');
    Route::get('/expenses/{id}','ExpensesController@edit');
    Route::get('/expenses-view/{id}','ExpensesController@show');
    Route::delete('/expenses-delete/{id}','ExpensesController@destroy')->name('expense.destroy');
    Route::resource('expense', 'ExpensesController');
    Route::resource('monthly-reports', 'MonthlyReportsController');

    //Blog routes
    Route::resource('/posts', 'BlogsController');
    Route::get('/posts-edit/{id}','BlogsController@edit');
    Route::get('/posts-create', 'BlogsController@create')->name('blog.create');
    Route::delete('/posts-delete/{id}','BlogsController@destroy')->name('post.destroy');

    Route::get('/messages', 'ContactUsController@index');
    Route::delete('/messages/{id}','ContactUsController@destroy')->name('message.destroy');
    Route::get('/messages/{id}', 'ContactUsController@show');

    });

    /**Product Controllers */
    Route::get('/collections', 'ProductsController@viewer')->name('pages.collections');
    Route::get('/collections/{id}', 'ProductsController@display')->name('pages.display');
    //Route::get('/collections/categories/{categories}', 'CategoriesController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    /** Cart Controllers */
    Route::get('/cart', 'CartController@index')->name('cart.index')->middleware();
    Route::post('/cart', 'CartController@store')->name('cart.store');
    Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/delete-cart/{id}', 'CategoriesController@destroy');
    Route::put('/cart/{id}', 'CartController@update')->name('cart.update');

    /**Checkout Controllers */
    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

    /**Search Controller */
    Route::get('/search', 'CheckoutController@search')->name('search');

    /**Blog Controllers */
    Route::get('/events', 'BlogsController@view')->name('blogs.index');
    Route::get('/events/{id}', 'BlogsController@eventShow')->name('blogs.show');

    /**Links Controller */
    //Terms of Service Page
    Route::get('/terms-of-service', 'LinksController@terms');
    //Contact Us Page
    Route::get('/contact-us', 'ContactUsController@contact');
    Route::post('/contact-us', 'ContactUsController@store')->name('contact.store');
    //Services Page
    Route::get('/services', 'ServicesController@index');




