@extends('layouts.nav')

@section('title')
    Events
@endsection

@section('styles')

<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
@endsection


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

  <!-- Page Content -->
  <div class="container text-center">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
        <!-- Title -->
      <h1 class="mt-4">{{ $blogs->title}}</h1>
        <!-- Author -->
        <p class="lead">by <a href="#">Vape Turf</a>
        </p>
        <!-- Date/Time -->
        <p>Posted on {{ Carbon\Carbon::parse($blogs->created_at)->format(' D M d, Y ') }}</p>
        <hr>
        <!-- Preview Image -->
        <img src="/storage/blog_images/{{ $blogs->display_image }}" alt="" width="500">
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

