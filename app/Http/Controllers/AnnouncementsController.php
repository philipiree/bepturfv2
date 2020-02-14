<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
      /**User View */
      public function eventShow($id)
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

          $blogs = Blog::find($id);
          return view('pages.blog-post')->with([
              'products' => $products,
              'categories' => $categories,
              'categoryName' => $categoryName,
              'blogs' => $blogs
              ]);
      }
}
