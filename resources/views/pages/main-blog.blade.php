@extends('layouts.nav')

@section('title')
    Announcements
@endsection



<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

<link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    @if(session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </div>
  <!-- Navigation -->
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-9 py-5 mx-auto">
        <h1 class="mx-auto text-center">Events</h1>
        <!-- Blog Post -->
        @if(count($blogs) > 0)
        @foreach ($blogs as $blog)
        <div class="card mb-4 my-5">
            <div class="card-header">
                <h4 class="card-title my-2">{{ $blog->title }}</h4>
            </div>
          <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/storage/blog_images/{{ $blog->display_image }}" alt="" width="120">
                </div>
                <div class="col-sm">
                <p class="card-text">{!! $blog->description !!}</p>
                </div>
              </div>
            <a href="/events/{{ $blog->id}}" class="btn">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <p>Posted on {{ Carbon\Carbon::parse($blog->created_at)->format(' D M d, Y ') }}</p>
          </div>
        </div>
        @endforeach
        @else
        <div class="alert alert-default" role="alert">
            <h6 class="text-center">No Events Posted Yet</h6>
        </div>
      @endif
      </div>


      <!-- Sidebar Widgets Column -->
      {{-- <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div> --}}

    </div>
    <!-- /.row -->

  </div>
  <div style="margin-top:450px"></div>
  <!-- /.container -->
  @endsection



  @section('script')

  @endsection

