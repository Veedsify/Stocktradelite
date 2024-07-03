@extends('../layouts/user/userlayout')
@section('content')



    <div id="main-wrapper">
      <!-- Sidebar Start -->
      <x-user.aside />
      <!--  Sidebar End -->

      <div class="page-wrapper">
        <!--  Header Start -->
        <x-user.header />

        <!--  Header End -->


        <div class="body-wrapper">
          <div class="container-fluid">
            <!--  Owl carousel -->
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                  <div class="card bg-primary-subtle shadow-none">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center">

                        <h6 class="mb-0 ">Available Balance</h6>
                        <div class="ms-auto text-primary d-flex align-items-center">
                          <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                          <span class="fs-2 fw-bold">+ 2.30%</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-4">
                        <h3 class="mb-0 fw-semibold fs-7">0.00 </h3>
                        <span class="fw-bold"> USD</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                  <div class="card bg-success-subtle shadow-none">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center">

                        <h6 class="mb-0">BTC Equivalent</h6>
                        <div class="ms-auto text-info d-flex align-items-center">
                          <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                          <span class="fs-2 fw-bold text-success">+ 3.20%</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-4">
                        <h3 class="mb-0 fw-semibold fs-7">0.00</h3>
                        <span class="fw-bold">BTC</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                  <div class="card bg-warning-subtle shadow-none">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center">

                        <h6 class="mb-0 ">Account Level</h6>

                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-4">
                        <h3 class="mb-0 fw-semibold fs-7">BEGINNER</h3>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-8 d-flex align-items-strech">


                




              </div>
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-lg-12 col-md-6">
                    <!-- Yearly Breakup -->
                    <div class="card">
                        <div class="card-body p-4">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link rounded active" data-bs-toggle="tab" href="#home" role="tab">
                                <span>Buy</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link rounded" data-bs-toggle="tab" href="#profile" role="tab">
                                <span>Sell</span>
                              </a>
                            </li>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content mt-4">
                            <div class="tab-pane active" id="home" role="tabpanel">
                              <form>
                                <span class="d-block mb-1">Amount</span>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                                  <button class="btn btn-sm arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bg-danger-subtle text-danger p-6 rounded">
                                      <span> USD </span>
                                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                                    </span>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a class="dropdown-item" href="#">INR</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">CLP</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">AMD</a>
                                    </li>
                                  </ul>
                                </div>
                                <span class="d-block mb-1">Amount</span>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                                  <button class="btn btn-sm arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bg-primary-subtle text-primary p-6 rounded">
                                      <span> BTC </span>
                                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                                    </span>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a class="dropdown-item" href="#">LTC</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">XRP</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">ETH</a>
                                    </li>
                                  </ul>
                                </div>
                                <button class="btn btn-primary w-100">Buy BTC</button>
                              </form>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                              <form>
                                <span class="d-block mb-1">Amount</span>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                                  <button class="btn btn-sm arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bg-danger-subtle text-danger p-6 rounded">
                                      <span> USD </span>
                                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                                    </span>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a class="dropdown-item" href="#">INR</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">CLP</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">AMD</a>
                                    </li>
                                  </ul>
                                </div>
                                <span class="d-block mb-1">Amount</span>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                                  <button class="btn btn-sm arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bg-primary-subtle text-primary p-6 rounded">
                                      <span> BTC </span>
                                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                                    </span>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a class="dropdown-item" href="#">LTC</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">XRP</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">ETH</a>
                                    </li>
                                  </ul>
                                </div>
                                <button class="btn btn-danger w-100">Sell BTC</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <!-- Monthly Earnings -->
                    <div class="card">
                      <div class="card-body">
                        <div class="row align-items-start">
                          <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold">
                              Monthly Earnings
                            </h5>
                            <h4 class="fw-semibold mb-3">$6,820</h4>
                            <div class="d-flex align-items-center pb-1">
                              <span class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-arrow-down-right text-danger"></i>
                              </span>
                              <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                              <p class="fs-3 mb-0">last year</p>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end">
                              <div class="text-white text-bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-currency-dollar fs-6"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="earning"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="card w-100">
                    <div class="card-header anime py-2" style="border-bottom: 1px solid #eee;">
                        Live Trade Session
                    </div>
                    <div class="card-body p-0">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div id="tradingview_19631"><div id="tradingview_bffd7-wrapper" style="position: relative; box-sizing: content-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; margin: 0px auto !important; padding: 0px !important; width: auto; height: calc(568px);"><iframe title="advanced chart TradingView widget" lang="en" id="tradingview_bffd7" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22COINBASE%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_bffd7%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22hotlist%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22Dark%22%2C%22style%22%3A%220%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22www.elitestacksmarkets.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22COINBASE%3ABTCUSD%22%2C%22page-uri%22%3A%22www.elitestacksmarkets.com%2Faccount%2Findex.php%22%7D" style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"></iframe></div></div>
                          <div class="tradingview-widget-copyright" style="width: 100%;"></div>
                          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                          <script type="text/javascript">
                          new TradingView.widget(
                          {
                          "width": "auto",
                          "height": 600,
                          "symbol": "COINBASE:BTCUSD",
                          "interval": "D",
                          "timezone": "Etc/UTC",
                          "theme": "Light",
                          "style": "0",
                          "locale": "en",
                          "toolbar_bg": "#ffffff",
                          "enable_publishing": false,
                          "allow_symbol_change": true,
                          "hotlist": true,
                          "container_id": "tradingview_19631"
                        }
                          );
                          </script>
                      </div>
                      <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
          </div>
        </div>

        <x-user.canvas />

    </div>
    <x-user.search />




    </div>

    @endsection
