@extends('layouts.app', [
    'title' => 'Reset',
  ])
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Login</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">
              Reset Password
            </p>
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
          <h3 class="heading">
            Create a new password
          </h3>
        </div>
      </div>
      <div class="col-md-12">
        <div class="flat-tabs">
          <div class="content-tab">
            <div class="content-inner">
              <form action="{{route('reset.password.save', [$token])}}" method="post">
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
                  <label>
                    New Password
                    <span class="fs-14">
                      {{ $errors->first('password') }}
                    </span>
                  </label>
                  <input type="password" class="form-control" name="password" placeholder="Please fill in the password."
                    value="{{old('password')}}">
                </div>
                <div class="form-group s1">
                  <label>
                    Confirm Password
                    <span class="fs-14">
                      {{ $errors->first('confirm_password') }}
                    </span>
                  </label>
                  <input type="password" class="form-control" placeholder="Please confirm your password."
                    name="confirm_password" value="{{old('confirm_password')}}">
                </div>
                <button type="submit" class="btn-action">
                  Save
                </button>
                <div class="bottom">
                  <p>Not a member?</p>
                  <a href="{{route('register') }}">Register</a>
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
          <h4 class="heading">Earn up to $25 worth of crypto</h4>
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
