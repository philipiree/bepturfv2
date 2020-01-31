@extends('layouts.nav')

@section('title')
    Events
@endsection

@section('styles')
<link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
      <h1 class="mt-4">{{ $blogs->title}}</h1>
        <!-- Author -->
        <p class="lead">by <a href="#">Vape Turf</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{ Carbon\Carbon::parse($blogs->created_at)->format(' D M i Y ') }}</p>
        <hr>
        <!-- Preview Image -->
        <img src="/storage/blog_images/{{ $blogs->display_image }}" alt="" width="120">
        <hr>
        <!-- Post Content -->
       <p> {!! $blogs->description !!} </p>
        <hr>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
      </div>
    </div>
    <!-- /.row -->
  </div>
  <div style="margin-top: 300px"></div>
  <!-- /.container -->

  <!-- Footer -->
  @endsection



  @section('script')

  @endsection

