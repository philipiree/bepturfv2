<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = Blog::orderBy('created_at','desc')->paginate(10);

        return view('admin.blogs.blogs-view')->with([
            'blogs' => $blogs
            ]);

    }

    public function view()
    {

        $categories = Category::all();
        $blogs = Blog::orderBy('created_at','desc')->paginate(10);

        return view('pages.main-blog')->with([
            'categories' => $categories,
            'blogs' => $blogs
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create-blog');
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
            'title' => 'required',
            'description' => 'required',
            'display_image' => 'image|nullable|max:1999'
        ]);

        //handling file upload

        if($request->hasFile('display_image')){
            //get file name with extension
            $filenameWithExt = $request->file('display_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('display_image')->getClientOriginalExtension();
            //Create a file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image

            $path = $request->file('display_image')->storeAs('public/blog_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $blogs = new Blog;
        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');
        $blogs->display_image = $fileNameToStore;
        $blogs->save();

        return redirect('/posts-create')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /** Admin View */
    public function show($id)
    {
        $blogs = Blog::find($id);


        return view('pages.blog-post')->with('blogs', $blogs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('admin.blogs.edit-blog')->with('blogs', $blogs);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

         if($request->hasFile('display_image')){
            //get file name with extension
            $filenameWithExt = $request->file('display_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('display_image')->getClientOriginalExtension();
            //Create a file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image

            $path = $request->file('display_image')->storeAs('public/blog_images', $fileNameToStore);
        }
        $blogs = Blog::find($id);
        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');

        if($request->hasFile('display_image')){
            $blogs->display_image = $fileNameToStore;
        }

        $blogs->save();
        alert()->success('Done!','Successfully Edited Product');
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        alert()->success('Done!','Successfully Deleted the Post');
        return redirect('/posts');
    }


}
