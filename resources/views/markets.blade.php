@extends('layouts.app', [
    'title' => 'Market',
  ])
@section('content')
<x-pages.header />

<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Markets</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Markets</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="wallet buy-crypto flat-tabs">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="min-height: 200vh;">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
            async>
            {
          "width": "100%",
          "height": "100%",
          "defaultColumn": "overview",
          "screener_type": "crypto_mkt",
          "displayCurrency": "USD",
          "colorTheme": "light",
          "locale": "en",
          "isTransparent": true,
          "largeChartUrl": "https://google.com"
        }
          </script>
        </div>
        <!-- TradingView Widget END -->
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

@endsection
