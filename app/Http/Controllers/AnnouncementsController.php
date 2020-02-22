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
          $categories = Category::all();
          $blogs = Blog::find($id);
          return view('pages.blog-post')->with([
              //'products' => $this->helper()->get('products'),
              //'categories' => $this->helper()->get('categories'),
              'categories' => $categories,
              'blogs' => $blogs
              ]);
      }

    //   public function helper(){

    //     request()->category;

    //     $products = Product::with('categories')->whereHas('categories', function($query){
    //     $query->where('name', request()->category);
    //     });
    //     $categories = Category::all();
    //     $categoryName = optional($categories->where('name', request()->category)->first())->name;

    //     return collect([
    //         'products' => $products,
    //         'categories' => $categories,
    //     ]);
    //   }
}
