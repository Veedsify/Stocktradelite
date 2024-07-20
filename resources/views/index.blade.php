@extends('layouts.app', [
  'title' => 'Home',
])
@section('content')
<!-- Banner Top -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500 Index"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100 Cash CFD"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": true,
  "displayMode": "adaptive",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>

<x-pages.header />
<!-- TradingView Widget END -->
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="banner__content ">
          <h2 class="title">Buy & Sell Digital Assets In The Stocktradelite</h2>
          <p class="fs-20 desc">
            Coin Stocktradelite is the easiest, safest, and fastest way to buy &
            sell crypto asset exchange.
          </p>
          <a href="
          {{ route('register') }}
          " class="btn-action"><span>Get started now</span></a>
          <div class="partner">
            <h6>Our Partners</h6>
            <div class="partner__list">
              <div class="swiper swiper-partner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="#"><img src="{{asset('assets/images/partner/logo-01.png')}}" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#"><img src="{{asset('assets/images/partner/logo-02.png')}}" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#"><img src="{{asset('assets/images/partner/logo-03.png')}}" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#"><img src="{{asset('assets/images/partner/logo-04.png')}}" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#"><img src="{{asset('assets/images/partner/logo-01.png')}}" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="banner__image">
          <img src="{{asset('assets/images/layout/banner-01.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .coinPriceBlock-container {
    overflow-x: auto !important;
  }

  .coinPriceBlock-footer {
    display: none;
  }

  .coinPriceBlock {
    aspect-ratio: 16/9;
  }
</style>
<!-- End Banner Top -->

<section class="crypto" data-aos="fade-up" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="crypto__main">
          <div class="flat-tabs">
            <ul class="menu-tab">
              <li class="active">
                <h6 class="fs-16">Crypto</h6>
              </li>

            </ul>
            <div class="content-tab">
              <div class="content-inner" style="overflow: auto;">
                <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js">
                </script>
                 <div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,1839,2010,74,6636,5426" currency="EUR" theme="light" transparent="true" show-symbol-logo="true"></div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="about_image">
          <div class="swiper img-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="img-main" src="{{asset('assets/images/layout/about-h1.png')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img class="img-main" src="{{asset('assets/images/layout/about-h1.png')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img class="img-main" src="{{asset('assets/images/layout/about-h1.png')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img class="img-main" src="{{asset('assets/images/layout/about-h1.png')}}" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <img class="icon icon-1" src="{{asset('assets/images/icon/icon-01.png')}}" alt="">
          <img class="icon icon-2" src="{{asset('assets/images/icon/icon-02.png')}}" alt="">
          <img class="icon icon-3" src="{{asset('assets/images/icon/icon-03.png')}}" alt="">
          <img class="icon icon-4" src="{{asset('assets/images/icon/icon-04.png')}}" alt="">
          <img class="icon icon-5" src="{{asset('assets/images/icon/icon-05.png')}}" alt="">
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="about__content" data-aos="fade-up" data-aos-duration="1000">
          <h3 class="heading">What Is Stocktradelite</h3>
          <p class="fs-20 decs">
            Experience a variety of trading on Bitcost. You can use various
            types of coin transactions such as Spot Trade, Futures Trade,
            P2P, Staking, Mining, and margin.
          </p>
          <ul class="list">
            <li>
              <h6 class="title">
                <span class="icon-check"></span>View real-time
                cryptocurrency prices
              </h6>
              <p class="text">
                Experience a variety of trading on Bitcost. You can use
                various types of coin transactions such as Spot Trade,
                Futures Trade, P2P, Staking, Mining, and margin.
              </p>
            </li>
            <li>
              <h6 class="title">
                <span class="icon-check"></span>Buy and sell BTC, ETH, XRP,
                OKB, Etc...
              </h6>
              <p class="text">
                Experience a variety of trading on Bitcost. You can use
                various types of coin transactions such as Spot Trade,
                Futures Trade, P2P, Staking, Mining, and margin.
              </p>
            </li>
          </ul>
          <a href="#" class="btn-action">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="work">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text center">
          <h3 class="heading">How It Work</h3>
          <p class="fs-20 desc">
            Stacks is a production-ready library of stackable content blocks
            built in React Native.
          </p>
        </div>

        <div class="work__main">
          <div class="work-box">
            <div class="image">
              <img src="{{asset('assets/images/icon/Cloud.png')}}" alt="">
            </div>
            <div class="content">
              <p class="step">Step 1</p>
              <a href="#" class="title">Register</a>
              <p class="text">
                Sign up quickly to start trading cryptocurrencies.
              </p>
            </div>
            <img class="line" src="{{asset('assets/images/icon/connect-line.png')}}" alt="">
          </div>
          <div class="work-box">
            <div class="image">
              <img src="{{asset('assets/images/icon/Wallet.png')}}" alt="">
            </div>
            <div class="content">
              <p class="step">Step 2</p>
              <a href="#" class="title">Fund wallet</a>
              <p class="text">
                Add funds securely using various payment options.
              </p>
            </div>
            <img class="line" src="{{asset('assets/images/icon/connect-line.png')}}" alt="">
          </div>
          <div class="work-box">
            <div class="image">
              <img src="{{asset('assets/images/icon/Mining.png')}}" alt="">
            </div>
            <div class="content">
              <p class="step">Step 3</p>
              <a href="#" class="title">Start trading</a>
              <p class="text">
                Begin trading with ease using our intuitive platform.
              </p>
            </div>
            <img class="line" src="{{asset('assets/images/icon/connect-line.png')}}" alt="">
          </div>
          <div class="work-box">
            <div class="image">
              <img src="{{asset('assets/images/icon/Comparison.png')}}" alt="">
            </div>
            <div class="content">
              <p class="step">Step 4</p>
              <a href="#" class="title">Earn money</a>
              <p class="text">
                Make informed decisions and start earning from your trades.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="coin-list">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text mb-5">
          <h3 class="heading">Market Update</h3>
          <a class="btn-action-2" href="#">See All Coins</a>
        </div>
        <div class="row py-5">
          <div class="col-md-12" style="min-height: 80vh;">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <script type="text/javascript"
                src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
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
    </div>
  </div>
</section>

<section class="about-2">
  <div class="container py-5">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="about_image">
          <img class="img-main" src="{{asset('assets/images/layout/Illustration.png')}}" alt="">
          <div class="traders-box">
            <div class="icon">
              <svg width="26" height="26" viewbox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.82861 17.172L10.8172 10.8177L17.1715 8.8291L15.1829 15.1834L8.82861 17.172Z" stroke="#3772FF"
                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <circle cx="13" cy="13" r="12" stroke="#3772FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"></circle>
              </svg>
            </div>
            <div class="content">
              <h6 class="numb">198+</h6>
              <p>Countries</p>
            </div>
          </div>
          <div class="traders-box">
            <div class="icon">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.6666 10.6669C22.3406 8.32055 21.2521 6.14647 19.5688 4.47959C17.8856 2.8127 15.701 1.74548 13.3515 1.44233C11.0021 1.13918 8.61814 1.6169 6.56691 2.80192M1.33331 2.66693V8.00026H6.66665"
                  stroke="#D33535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M1.33331 13.334C1.65939 15.6804 2.74789 17.8544 4.43113 19.5213C6.11437 21.1882 8.29897 22.2554 10.6484 22.5586C12.9979 22.8617 15.3818 22.384 17.433 21.199M22.6666 21.334V16.0007H17.3333"
                  stroke="#D33535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
            <div class="content">
              <h6 class="numb">350+</h6>
              <p>Trading Pairs</p>
            </div>
          </div>
          <div class="traders-box">
            <div class="icon">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.52364 15.7402C5.03897 15.7402 1.2088 16.4181 1.2088 19.1341C1.2088 21.8489 5.01447 22.5524 9.52364 22.5524C14.0083 22.5524 17.8385 21.8734 17.8385 19.1586C17.8385 16.4437 14.0328 15.7402 9.52364 15.7402Z"
                  stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.52361 11.8667C12.4823 11.8667 14.8529 9.49484 14.8529 6.53734C14.8529 3.57867 12.4823 1.20801 9.52361 1.20801C6.56611 1.20801 4.19427 3.57867 4.19427 6.53734C4.19427 9.49484 6.56611 11.8667 9.52361 11.8667Z"
                  stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M20.4048 8.11328V12.7916" stroke="#3772FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M22.7917 10.4525H18.02" stroke="#3772FF" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </div>
            <div class="content">
              <h6 class="numb">20 million+</h6>
              <p>Trades</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="about__content" data-aos="fade-up" data-aos-duration="1000">
          <h3 class="heading">
            We are the most trusted cryptocurrency platform.
          </h3>
          <p class="fs-20 desc">
            offering secure transactions, transparent operations, and exceptional customer support for all your crypto
            needs.
          </p>
          <ul class="list">
            <li>
              <div class="icon">
                <svg width="29" height="23" viewbox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M19.1987 11.4737C19.1987 14.0115 17.1406 16.0681 14.6029 16.0681C12.0651 16.0681 10.0085 14.0115 10.0085 11.4737C10.0085 8.93457 12.0651 6.87793 14.6029 6.87793C17.1406 6.87793 19.1987 8.93457 19.1987 11.4737Z"
                    stroke="#D33535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.6007 22.0866C20.1354 22.0866 25.1978 18.107 28.048 11.4735C25.1978 4.83991 20.1354 0.860352 14.6007 0.860352H14.6065C9.07172 0.860352 4.00934 4.83991 1.15912 11.4735C4.00934 18.107 9.07172 22.0866 14.6065 22.0866H14.6007Z"
                    stroke="#D33535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="content">
                <h6 class="title">Clarity</h6>
                <p>
                  We help you make sense of the coins, the terms, the dense
                  charts and market changes.
                </p>
              </div>
            </li>
            <li>
              <div class="icon green">
                <svg width="25" height="30" viewbox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M22.5815 4.4024C23.2167 4.62478 23.6411 5.2236 23.6411 5.89655V15.7408C23.6411 18.4922 22.6411 21.1186 20.8752 23.1534C19.9871 24.1781 18.8636 24.976 17.6703 25.6214L12.4989 28.4149L7.3188 25.6199C6.12406 24.9746 4.99909 24.1781 4.10958 23.1519C2.34218 21.1171 1.33929 18.4893 1.33929 15.735V5.89655C1.33929 5.2236 1.7637 4.62478 2.39886 4.4024L11.9655 1.04056C12.3056 0.921376 12.6762 0.921376 13.0149 1.04056L22.5815 4.4024Z"
                    stroke="#58BD7D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.71194 14.2775L11.4619 17.0288L17.1274 11.3633" stroke="#58BD7D" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="content">
                <h6 class="title">Confidence</h6>
                <p>
                  Our markets are always up to date, sparking curiosity with
                  real-world relevance.
                </p>
              </div>
            </li>
            <li>
              <div class="icon blue">
                <svg width="33" height="25" viewbox="0 0 33 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M24.7354 10.8438C27.0644 10.8438 28.9536 8.9559 28.9536 6.62699C28.9536 4.29807 27.0644 2.41016 24.7354 2.41016"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                    d="M26.6747 15.4258C27.3701 15.4737 28.0616 15.5723 28.7424 15.7256C29.6884 15.9108 30.8262 16.2985 31.2312 17.1472C31.4897 17.6907 31.4897 18.3236 31.2312 18.8685C30.8275 19.7172 29.6884 20.1036 28.7424 20.2981"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                    d="M8.30432 10.8438C5.9754 10.8438 4.08615 8.9559 4.08615 6.62699C4.08615 4.29807 5.9754 2.41016 8.30432 2.41016"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                    d="M6.36512 15.4258C5.66964 15.4737 4.97816 15.5723 4.29734 15.7256C3.35138 15.9108 2.21357 16.2985 1.80987 17.1472C1.55007 17.6907 1.55007 18.3236 1.80987 18.8685C2.21224 19.7172 3.35138 20.1036 4.29734 20.2981"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.5131 16.334C21.2322 16.334 25.2638 17.0481 25.2638 19.906C25.2638 22.7625 21.2589 23.5033 16.5131 23.5033C11.7926 23.5033 7.76233 22.7891 7.76233 19.9313C7.76233 17.0734 11.7673 16.334 16.5131 16.334Z"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.5131 12.2579C13.4008 12.2579 10.9053 9.76246 10.9053 6.6488C10.9053 3.53647 13.4008 1.04102 16.5131 1.04102C19.6254 1.04102 22.1209 3.53647 22.1209 6.6488C22.1209 9.76246 19.6254 12.2579 16.5131 12.2579Z"
                    stroke="#3772FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="content">
                <h6 class="title">Community</h6>
                <p>
                  We supports the crypto community, putting data in the
                  hands which need it most.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="counter-numbers">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text center">
          <p class="desc">
            Awesome Stats
          </p>
          <h3 class="heading">Let our awesome stats speak</h3>
        </div>
        <div class="counter-main" data-aos="fade-up" data-aos-duration="1000">
          <img class="img" src="{{asset('assets/images/icon/icon-c1.png')}}" alt="">
          <img class="img" src="{{asset('assets/images/icon/icon-c2.png')}}" alt="">
          <img class="img" src="{{asset('assets/images/icon/icon-c3.png')}}" alt="">
          <img class="img" src="{{asset('assets/images/icon/icon-c4.png')}}" alt="">
          <ul class="list-counter counter-scroll">
            <li>
              <p class="title">
                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17 8.00068C16.7554 6.2409 15.9391 4.61034 14.6766 3.36018C13.4142 2.11001 11.7758 1.3096 10.0137 1.08224C8.25159 0.85487 6.46362 1.21316 4.9252 2.10193M1 2.00068V6.00068H5"
                    stroke="#777E90" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                    d="M1 10.001C1.24456 11.7608 2.06093 13.3913 3.32336 14.6415C4.58579 15.8916 6.22424 16.6921 7.98633 16.9194C9.74841 17.1468 11.5364 16.7885 13.0748 15.8997M17 16.001V12.001H13"
                    stroke="#777E90" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Trades per day
              </p>
              <div class="number-content counter">
                <span class="timer count-number countup number" data-value="20">20</span>m+
              </div>
            </li>
            <li>
              <p class="title">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M21 15.9999V7.9999C20.9996 7.64918 20.9071 7.30471 20.7315 7.00106C20.556 6.69742 20.3037 6.44526 20 6.2699L13 2.2699C12.696 2.09437 12.3511 2.00195 12 2.00195C11.6489 2.00195 11.304 2.09437 11 2.2699L4 6.2699C3.69626 6.44526 3.44398 6.69742 3.26846 7.00106C3.09294 7.30471 3.00036 7.64918 3 7.9999V15.9999C3.00036 16.3506 3.09294 16.6951 3.26846 16.9987C3.44398 17.3024 3.69626 17.5545 4 17.7299L11 21.7299C11.304 21.9054 11.6489 21.9979 12 21.9979C12.3511 21.9979 12.696 21.9054 13 21.7299L20 17.7299C20.3037 17.5545 20.556 17.3024 20.7315 16.9987C20.9071 16.6951 20.9996 16.3506 21 15.9999Z"
                    stroke="#777E90" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7.5 4.20996L12 6.80996L16.5 4.20996" stroke="#777E90" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7.5 19.79V14.6L3 12" stroke="#777E90" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M21 12L16.5 14.6V19.79" stroke="#777E90" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M3.27002 6.95996L12 12.01L20.73 6.95996" stroke="#777E90" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M12 22.08V12" stroke="#777E90" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>

                Digital assests
              </p>
              <div class="number-content counter">
                <span class="timer count-number countup number" data-value="20">100</span>m+
              </div>
            </li>
            <li>
              <p class="title">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.87749 13.2061C4.03349 13.2061 0.750488 13.7871 0.750488 16.1151C0.750488 18.4421 4.01249 19.0451 7.87749 19.0451C11.7215 19.0451 15.0045 18.4631 15.0045 16.1361C15.0045 13.8091 11.7425 13.2061 7.87749 13.2061Z"
                    stroke="#777E90" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.87757 9.886C10.4136 9.886 12.4456 7.853 12.4456 5.318C12.4456 2.782 10.4136 0.75 7.87757 0.75C5.34257 0.75 3.30957 2.782 3.30957 5.318C3.30957 7.853 5.34257 9.886 7.87757 9.886Z"
                    stroke="#777E90" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M17.2041 6.66895V10.6789" stroke="#777E90" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M19.2502 8.67383H15.1602" stroke="#777E90" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>

                Happy users
              </p>
              <div class="number-content counter">
                <span class="timer count-number countup number" data-value="20">10</span>m+
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="block-text">
          <h3 class="heading">Our customers love what we do</h3>
          <h6 class="fs-20">
            Transform Your idea into Reality With Stocktradelite
          </h6>
          <p>
            Our customers rave about our seamless and secure crypto trading experience, praising our intuitive tools and
            real-time analytics. Join the growing community of satisfied traders at Stocktradelite.
          </p>

          <div class="swiper swiper-thumb1">
            <div class="swiper-wrapper list-img">
              <div class="swiper-slide">
                <img src="{{asset('assets/images/avt/avt-02.png')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{asset('assets/images/avt/avt-03.png')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{asset('assets/images/avt/avt-04.png')}}" alt="">
              </div>
            </div>
          </div>
          <div class="couter">
            <h6>1K+</h6>
            <p class="title">Customer Reviews</p>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="swiper swiper-testimonial-1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonials-box">
                <span class="icon-quote"></span>
                <h6 class="text">
                  “Great course I really enjoyed it and the course was way
                  easy to learn with very good explanations of the code, I
                  could easily understand and develop applications with the
                  knowledge gathered during the course.”
                </h6>
                <div class="bottom">
                  <div class="info">
                    <img src="{{asset('assets/images/avt/avt-02.png')}}" alt="">
                    <div class="content">
                      <h6 class="name">Johnny Andro</h6>
                      <p class="position">Director, Company</p>
                    </div>
                  </div>
                  <img src="{{asset('assets/images/partner/logo-05.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonials-box">
                <span class="icon-quote"></span>
                <h6 class="text">
                  “Great course I really enjoyed it and the course was way
                  easy to learn with very good explanations of the code, I
                  could easily understand and develop applications with the
                  knowledge gathered during the course.”
                </h6>
                <div class="bottom">
                  <div class="info">
                    <img src="{{asset('assets/images/avt/avt-03.png')}}" alt="">
                    <div class="content">
                      <h6 class="name">Johnny Andro</h6>
                      <p class="position">Director, Company</p>
                    </div>
                  </div>
                  <img src="{{asset('assets/images/partner/logo-05.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonials-box">
                <span class="icon-quote"></span>
                <h6 class="text">
                  “Great course I really enjoyed it and the course was way
                  easy to learn with very good explanations of the code, I
                  could easily understand and develop applications with the
                  knowledge gathered during the course.”
                </h6>
                <div class="bottom">
                  <div class="info">
                    <img src="{{asset('assets/images/avt/avt-04.png')}}" alt="">
                    <div class="content">
                      <h6 class="name">Johnny Andro</h6>
                      <p class="position">Director, Company</p>
                    </div>
                  </div>
                  <img src="{{asset('assets/images/partner/logo-05.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="blog-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text">
          <h3 class="heading">Learn And Earn</h3>
          <p class="desc">
            Stacks is a production-ready library of stackable <br>
            content blocks built in React Native.
          </p>

          <a href="#" class="btn-action-3">See all article</a>
        </div>
      </div>

      <div class="col-xl-6 col-md-12">
        <div class="blog-box s1">
          <div class="box-image">
            <img src="{{asset('assets/images/blog/blog-v2.1.png')}}" alt="">
            <div class="wrap-video">
              <a href="https://www.youtube.com/watch?v=i7EMACWuErA" class="popup-youtube">
                <svg width="13" height="16" viewbox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                    fill="#777E90"></path>
                </svg>
              </a>
            </div>
          </div>

          <div class="box-content">
            <div class="left">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>
              <p class="text fs-18">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Facilisi id vestibulum sem
              </p>
            </div>

            <div class="right">
              <a href="#" class="btn-action-3">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="blog-main">
          <div class="blog-box">
            <div class="box-image">
              <img src="{{asset('assets/images/blog/blog-v2.2.png')}}" alt="">
              <div class="wrap-video">
                <a href="https://www.youtube.com/watch?v=i7EMACWuErA" class="popup-youtube">
                  <svg width="13" height="16" viewbox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                      fill="#777E90"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>

              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
          <div class="blog-box">
            <div class="box-image">
              <img src="{{asset('assets/images/blog/blog-v2.3.png')}}" alt="">
              <div class="wrap-video">
                <a href="https://www.youtube.com/watch?v=i7EMACWuErA" class="popup-youtube">
                  <svg width="13" height="16" viewbox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                      fill="#777E90"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>

              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
          <div class="blog-box">
            <div class="box-image">
              <img src="{{asset('assets/images/blog/blog-v2.4.png')}}" alt="">
              <div class="wrap-video">
                <a href="https://www.youtube.com/watch?v=i7EMACWuErA" class="popup-youtube">
                  <svg width="13" height="16" viewbox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                      fill="#777E90"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>

              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@endsection
