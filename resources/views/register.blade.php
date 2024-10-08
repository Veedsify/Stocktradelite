﻿@extends('layouts.app', [
'title' => 'Register',
])
@section('content')
<x-pages.header />

<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Register</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Register</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="register">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text center">
          <h3 class="heading">Register To Stocklitetrade</h3>
          <p class="desc fs-20">
            Register in advance and enjoy the event benefits
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="flat-tabs">
          <div class="content-tab">
            <div class="content-inner">
              <form action="{{route('register.new')}}" method="post">
                @csrf
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-center">{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name
                    <span class="fs-14">
                      {{ $errors->first('fullanme') }}
                    </span>
                  </label>
                  <input required type="text" name="fullanme" class="form-control"
                    placeholder="Please fill in the full name." value="{{old('fullanme')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address
                    <span class="fs-14">
                      {{ $errors->first('email') }}
                    </span>
                  </label>
                  <input required type="email" name="email" class="form-control" placeholder="Please fill in the email."
                    value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <label>Country
                    <span class="fs-14">
                      {{ $errors->first('country') }}
                    </span>
                  </label>
                  <select name="country" class="form-control countriesSelect">
                    <option label="Select a country" disabled selected></option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Phone
                    <span class="fs-14">
                      {{ $errors->first('phone') }}
                    </span></label>
                  <input required name="phone" type="text" class="form-control" placeholder="+1 234 456 7890"
                    value="{{old('phone')}}">
                </div>
                <div class="form-group">
                  <label>Password
                    <span class="fs-14">
                      {{ $errors->first('password') }}
                      {{ $errors->first('confirm_password') }}
                    </span>
                  </label>
                  <input required type="password" name="password" class="form-control mb-3"
                    placeholder="Please enter a password." value="{{old('password')}}">
                  <input required type="password" name="confirm_password" class="form-control"
                    placeholder="Please re-enter your password.">
                </div>
                <button type="submit" class="btn-action">
                  Register
                </button>
                <div class="bottom">
                  <p>Already have an account?</p>
                  <a href="{{route('login') }}">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-sale">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="block-text">
          <h4 class="heading">Signup and Earn higher profits here on Stocklitetrade</h4>
          <p class="desc">
            Discover how specific cryptocurrencies work — and get a bit of
            each crypto to try out for yourself.
          </p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="button">
          <a href="#">Create Account</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  let selectCountries = document.querySelectorAll('.countriesSelect');
  async function GetCountries (){
    let response = await fetch('https://restcountries.com/v3.1/all');
    let data = await response.json();

    selectCountries.forEach(select => {
    data.forEach(country => {
      let option = document.createElement('option');
      option.innerText = country.name.common;
      option.value = country.name.common;
      select.appendChild(option);
    });
  })
}
GetCountries();

</script>
@endsection