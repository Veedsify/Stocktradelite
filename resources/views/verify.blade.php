@extends('layouts.app')
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Verify Account</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Verify</p>
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


            <h3 class="heading">Verify Account</h3>
        </div>
      </div>

      <div class="col-md-12">
        <div id="main-wrapper">
              <div class="d-flex align-items-center justify-content-center w-100">
                  <div class="col-md-8 col-lg-6 col-xxl-3 auth-card flat-tabs">
                    <div class=" mb-0 content-tab">
                      <div class="content-inner ">

                        <div class="mb-5 text-center">
                          <p>We sent a verification code to your mobile. Enter the code from the mobile in the field below.</p>
                          <h6 class="fw-bolder">******1234</h6>
                        </div>
                        <form>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-semibold">Type your 6 digits security code</label>
                            <div class="d-flex align-items-center gap-2 gap-sm-3">
                              <input type="text" class="form-control" placeholder="">
                              <input type="text" class="form-control" placeholder="">
                              <input type="text" class="form-control" placeholder="">
                              <input type="text" class="form-control" placeholder="">
                              <input type="text" class="form-control" placeholder="">
                              <input type="text" class="form-control" placeholder="">
                            </div>
                          </div>
                          <button class="btn-action w-100"  type="submit">Verify My Account</button>

                          <div class="bottom">
                            <p>Didn't get the code?</p>
                            <a href="{{route('login') }}">Resend</a>
                          </div>
                        </form>
                      </div>
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
