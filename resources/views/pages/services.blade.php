@extends('layouts.nav')

@section('title')
    Services
@endsection

@section('styles')

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="{{ asset('css/tos.css') }}" rel="stylesheet">
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
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-centered">
        <h5 class="text-center">Services</h5>

        <p class="title">IN-STORE SERVICES</p>
        <p class="par">1. We sell premium hand-made Electronic Vape Juices for affordable price</p>
        <p class="par">2. We offer our service to change your cotton from time to time for a low price</p>
        <p class="par">3. We offer our service to change your coils for your atomizer whether it is RDA or RTA</p>

        <p class="title">ONLINE SERVICES</p>
        <p class="par">1. We deliver your orders through our online website for free within the City of Cebu</p>
    </div>
  </div>
  </div>
  <div style="margin-top: 175px"></div>

  @endsection

  @section('script')

  @endsection

