@extends('layouts.nav')

@section('title')
    Contact Us
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
          <h5 class="text-center">Contact Us</h5>
          <p style="margin-top: 30px" class="par">Please call or text us at +63-995-359-1856 or simply fill out the form below completely and we will get back to you as soon as possible! </p>
        <form action="{{ route('contact.store') }}" class="needs-validation" method="POST" style="margin-top: 50px" novalidate>
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input name="name" type="text" class="form-control" placeholder="Name" required>
                <div class="invalid-feedback">
                    Valid name is required.
                  </div>
              </div>
              <div class="form-group col-md-6">
                <label>Email</label>
                <input name="email" class="form-control"  placeholder="Email" required>
                <div class="invalid-feedback">
                    Valid email is required.
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input name="phone" type="text" class="form-control" placeholder="" required>
              <div class="invalid-feedback">
                Valid Phone Number is required.
              </div>
            </div>
            <div class="form-group">
              <textarea name="description" rows="9" type="text" class="form-control" id="text-area" required>
              </textarea>
              <div class="invalid-feedback">
                Valid Message is required.
              </div>
            </div>
            <button type="submit" class="btn">Send</button>
          </form>
    </div>
  </div>
  </div>
  <div style="margin-top: 230px"></div>

  @endsection

  @section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

 @endsection

