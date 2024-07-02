@extends('layouts.app')
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
          <li><a href="index.html">Home</a></li>
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
          <h3 class="heading">Register To Stocktradelite</h3>
          <p class="desc fs-20">
            Register in advance and enjoy the event benefits
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="flat-tabs">
          <ul class="menu-tab">
            <li class="active">
              <h6 class="fs-16">Email</h6>
            </li>
            <li>
              <h6 class="fs-16">Mobile</h6>
            </li>
          </ul>

          <div class="content-tab">
            <div class="content-inner">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email/ID</label>
                  <input type="email" class="form-control" id="exampleInputEmail1"
                    placeholder="Please fill in the email form.">
                </div>
                <div class="form-group">
                  <label>Password
                    <span>(8 or more characters, including numbers and special
                      characters)</span></label>
                  <input type="password" class="form-control" placeholder="Please enter a password.">
                  <input type="password" class="form-control" placeholder="Please re-enter your password.">
                </div>
                <div class="form-group">
                  <label>NickName
                    <span class="fs-14">(Excluding special characters)</span></label>
                  <input type="text" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Country </label>
                  <select class="form-control">
                    <option>South Korea (+82)</option>
                    <option>Vietnamese (+84)</option>
                    <option>South Korea (+82)</option>
                    <option>South Korea (+82)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Phone
                    <span class="fs-14">(Enter numbers only)</span></label>
                  <input type="text" class="form-control" placeholder="ex) 01012345678 (without '-')">
                </div>

                <div class="form-group">
                  <label>UID Code </label>
                  <input type="text" class="form-control" placeholder="Please enter your invitation code.">
                </div>

                <button type="submit" class="btn-action">
                  Pre-Registration
                </button>
                <div class="bottom">
                  <p>Already have an account?</p>
                  <a href="{{route('login') }}">Login</a>
                </div>
              </form>
            </div>
            <div class="content-inner">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile Phone</label>
                  <div>
                    <select class="form-control">
                      <option>+1</option>
                      <option>+84</option>
                      <option>+82</option>
                      <option>+32</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Your Phone number">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password
                    <span>(8 or more characters, including numbers and special
                      characters)</span></label>
                  <input type="password" class="form-control" placeholder="Please enter a password.">
                  <input type="password" class="form-control" id="exampleInputPassword2"
                    placeholder="Please re-enter your password.">
                </div>
                <div class="form-group">
                  <label>NickName
                    <span class="fs-14">(Excluding special characters)</span></label>
                  <input type="text" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Country </label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>South Korea (+82)</option>
                    <option>Vietnamese (+84)</option>
                    <option>South Korea (+82)</option>
                    <option>South Korea (+82)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Phone
                    <span class="fs-14">(Enter numbers only)</span></label>
                  <input type="text" class="form-control" placeholder="ex) 01012345678 (without '-')">
                </div>

                <div class="form-group">
                  <label>UID Code </label>
                  <input type="text" class="form-control" placeholder="Please enter your invitation code.">
                </div>

                <button type="submit" class="btn-action">
                  Pre-Registration
                </button>
                <div class="bottom">
                  <p>Already have an account?</p>
                  <a href="login.html">Login</a>
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