@extends('layouts.nav')

@section('title')
    Products Preview
@endsection

@section('styles')
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="{{ asset('css/itemdisplay.css') }}" rel="stylesheet">
<link href="css/shop-homepage.css" rel="stylesheet">
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
    <div class="row">
        <div class="container">
            <div class="col-md-12 text-center my-5">

           <h3>Search Results</h3>
            <p>{{$products->total()}} result(s) for '{{ request()->input('query')}}'</p>

            <div class="row">
                @forelse ($products as $product)
                    <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card h-100">
                      <a href="/collections/{{ $product->id }}"><img class="card-img-top" src="/storage/display_images/{{ $product->display_image }}" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a class="product_display"href="/collections/{{ $product->id}}">{{ $product->name }}</a>
                          <p class="descp">{{ $product->flavor }}</p>
                          <p class="makerdesc">{{ $product->maker }}</p>
                          <h5 class="pricetag">₱{{ $product->price }}</h5>
                        </h4>
                      </div>
                    </div>
                  </div>
                @empty

                <div style="text-align:left">No Items Found</div>

                @endforelse

                <!-- /.row -->

              </div>

        </div>
        <div class="center-align">
            {{-- {{ $products->links() }} --}}
            {{ $products->appends(request()->input())->links() }}
        </div>
        </div>
    </div>
</div>
    <div style="margin-bottom: 470px;"></div>
    @include('sweetalert::alert')
@endsection


@section('script')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>

@endsection
