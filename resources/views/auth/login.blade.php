@extends('layouts.nav')

@section('content')
<div style="margin-top:50px"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header text-center"><h3>{{ __('LOGIN') }}</h3></div>

                <div class="card-body">

                    <form class="col-md-6 offset-3"method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" style="margin-top: 20px;" class="btn btn-block">
                            {{ __('Login') }}
                        </button>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin-top:10px;">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                      </form>
                        <div style="margin-top: 0px; margin-left: 30px;" class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <a class="text-center" href="{{ route('register') }}">
                                    {{ __('Create acount') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
<div style="margin-top:260px"></div>

@endsection
