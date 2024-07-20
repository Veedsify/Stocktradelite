@extends('layouts.app', [
    'title' => 'Recover Account',
  ])
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Recover Account</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Recovery</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="register login">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text center">
          <h3 class="heading">Reover Account</h3>
          <p class="desc fs-20">
            Please, insert your email to recover your account!
          </p>
          <div class="lock">
            <div class="icon">
              <svg width="16" height="20" viewbox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.00004 11.7578C7.67672 11.7578 7.41406 12.0205 7.41406 12.3438C7.41406 12.6671 7.67672 12.9298 8.00004 12.9298C8.32336 12.9298 8.58602 12.6671 8.58602 12.3438C8.58602 12.0205 8.32336 11.7578 8.00004 11.7578Z"
                  fill="white"></path>
                <path
                  d="M11.5162 8.24219H4.2187C2.10011 8.24219 0.382568 9.95965 0.382568 12.0783C0.382568 15.6973 2.78413 19.0605 6.32241 19.8205C11.2508 20.8791 15.618 17.0922 15.618 12.344C15.618 10.0787 13.7816 8.24219 11.5162 8.24219ZM8.58628 13.9941V17.071C8.58628 17.3949 8.32417 17.657 8.0003 17.657C7.6764 17.657 7.41433 17.3949 7.41433 17.071V13.9941C6.73374 13.7514 6.24237 13.107 6.24237 12.3441C6.24237 11.3747 7.03093 10.5861 8.0003 10.5861C8.96968 10.5861 9.75823 11.3747 9.75823 12.3441C9.75823 13.107 9.26686 13.7513 8.58628 13.9941Z"
                  fill="white"></path>
                <path
                  d="M8.00039 0C5.08223 0 2.72656 2.35562 2.72656 5.27383V7.3234C3.20102 7.17391 3.69582 7.07086 4.21898 7.07086H5.07051V5.27383C5.07051 3.65652 6.38309 2.34395 8.00039 2.34395C9.6177 2.34395 10.9303 3.65652 10.9303 5.27383V7.07082H11.5163C12.1356 7.07082 12.7216 7.19777 13.2742 7.3948V5.27383C13.2742 2.35844 10.9128 0 8.00039 0Z"
                  fill="white"></path>
              </svg>
            </div>
            <p>{{route("recovery")}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="flat-tabs">
          <div class="content-tab">
            <div class="content-inner">
              <form action="{{route('recovery.account')}}" method="post">
                @csrf
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul>
                    <li class="text-center">{{session('error')}}</li>
                  </ul>
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <ul>
                    <li class="text-center">{{session('success')}}</li>
                  </ul>
                </div>
                @endif
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address
                    <span class="fs-14">
                      {{ $errors->first('email') }}
                    </span>
                  </label>
                  <input type="email" class="form-control" name="email" placeholder="Please fill in the email form."
                    value="{{old('email')}}">
                </div>

                <button type="submit" class="btn-action">
                  Send Recovery Email
                </button>
                <div class="bottom">
                  <p>Remebered Password?</p>
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
  function Convert() {
        let dollarInput = document.getElementByClass("dollar").value;
        let bitcoinInput = document.getElementByClass("bitcoin").value;

        if ((dollarInput != "") & (bitcoinInput == "")) {
          let parsedDollar = parseFloat(dollarInput);
          let fromDollarToBitcoin = parsedDollar * 0.000022;

          let output = document.getElementByClass("bitcoin");
          output.value = fromDollarToBitcoin;
          console.log("Bitcoin", fromDollarToBitcoin);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput != "") & (dollarInput == "")) {
          let parsedBitcoin = parseFloat(bitcoinInput);
          let fromBitcoinToDollar = parsedBitcoin * 46403.5;

          let output = document.getElementByClass("dollar");
          output.value = fromBitcoinToDollar;
          console.log("US$", fromBitcoinToDollar);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput == "") & (dollarInput == "")) {
          showMessage();
        }
      }
</script>
@endsection
