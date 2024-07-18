@extends('../layouts/user/userlayout', [
'title' => ucwords(auth()->user()->name) . ' | Dashboard - Stocktradelite',
])
@section('content')
<div id="main-wrapper">
    <!-- Sidebar Start -->
    <x-user.aside />
    <!--  Sidebar End -->

    <div class="page-wrapper">
        <!--  Header Start -->
        <x-user.header />
        <div class="body-wrapper">
            <div class="container-fluid">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                                "symbols": [{
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
                <!--  Owl carousel -->
                <div class="row">
                    <div class="col-sm-6 col-xl-4">
                        <div class="card bg-primary-subtle shadow-none">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ">Available Balance</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <h3 class="mb-0 fw-semibold fs-7" id="user-balance"
                                        data-balance="{{ auth()->user()->balance }}">
                                        {{ number_format(auth()->user()->balance, 2) }}
                                    </h3>
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
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <h3 class="mb-0 fw-semibold fs-7" id="btc-equivalent">
                                        Loading....
                                    </h3>
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
                                    <h3 class="mb-0 fw-semibold fs-7">
                                        {{ strtoupper(\App\Models\Tier::where('id',
                                        auth()->user()->tier)->first()->name) }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card bg-danger-subtle shadow-none">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ">Trades Open</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <h3 class="mb-0 fw-semibold fs-7">
                                        {{
                                        auth()->user()->trades->first()->total_count ?? 0
                                        }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card p-0">
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript"
                                        src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                                        async>
                                        {
                                  "colorTheme": "light",
                                  "dateRange": "12M",
                                  "showChart": true,
                                  "locale": "en",
                                  "width": "100%",
                                  "height": "600",
                                  "largeChartUrl": "https://google.com",
                                  "isTransparent": true,
                                  "showSymbolLogo": true,
                                  "showFloatingTooltip": false,
                                  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                  "gridLineColor": "rgba(240, 243, 250, 0)",
                                  "scaleFontColor": "rgba(19, 23, 34, 1)",
                                  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                  "tabs": [
                                    {
                                      "title": "Indices",
                                      "symbols": [
                                        {
                                          "s": "FOREXCOM:SPXUSD",
                                          "d": "S&P 500 Index"
                                        },
                                        {
                                          "s": "FOREXCOM:NSXUSD",
                                          "d": "US 100 Cash CFD"
                                        },
                                        {
                                          "s": "FOREXCOM:DJI",
                                          "d": "Dow Jones Industrial Average Index"
                                        },
                                        {
                                          "s": "INDEX:NKY",
                                          "d": "Nikkei 225"
                                        },
                                        {
                                          "s": "INDEX:DEU40",
                                          "d": "DAX Index"
                                        },
                                        {
                                          "s": "FOREXCOM:UKXGBP",
                                          "d": "FTSE 100 Index"
                                        }
                                      ],
                                      "originalTitle": "Indices"
                                    },
                                    {
                                      "title": "Futures",
                                      "symbols": [
                                        {
                                          "s": "CME_MINI:ES1!",
                                          "d": "S&P 500"
                                        },
                                        {
                                          "s": "CME:6E1!",
                                          "d": "Euro"
                                        },
                                        {
                                          "s": "COMEX:GC1!",
                                          "d": "Gold"
                                        },
                                        {
                                          "s": "NYMEX:CL1!",
                                          "d": "WTI Crude Oil"
                                        },
                                        {
                                          "s": "NYMEX:NG1!",
                                          "d": "Gas"
                                        },
                                        {
                                          "s": "CBOT:ZC1!",
                                          "d": "Corn"
                                        }
                                      ],
                                      "originalTitle": "Futures"
                                    },
                                    {
                                      "title": "Bonds",
                                      "symbols": [
                                        {
                                          "s": "CBOT:ZB1!",
                                          "d": "T-Bond"
                                        },
                                        {
                                          "s": "CBOT:UB1!",
                                          "d": "Ultra T-Bond"
                                        },
                                        {
                                          "s": "EUREX:FGBL1!",
                                          "d": "Euro Bund"
                                        },
                                        {
                                          "s": "EUREX:FBTP1!",
                                          "d": "Euro BTP"
                                        },
                                        {
                                          "s": "EUREX:FGBM1!",
                                          "d": "Euro BOBL"
                                        }
                                      ],
                                      "originalTitle": "Bonds"
                                    },
                                    {
                                      "title": "Forex",
                                      "symbols": [
                                        {
                                          "s": "FX:EURUSD",
                                          "d": "EUR to USD"
                                        },
                                        {
                                          "s": "FX:GBPUSD",
                                          "d": "GBP to USD"
                                        },
                                        {
                                          "s": "FX:USDJPY",
                                          "d": "USD to JPY"
                                        },
                                        {
                                          "s": "FX:USDCHF",
                                          "d": "USD to CHF"
                                        },
                                        {
                                          "s": "FX:AUDUSD",
                                          "d": "AUD to USD"
                                        },
                                        {
                                          "s": "FX:USDCAD",
                                          "d": "USD to CAD"
                                        }
                                      ],
                                      "originalTitle": "Forex"
                                    }
                                  ]
                                }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <!-- Monthly Earnings -->
                                <div class="card">
                                    <div class="card-body">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <script type="text/javascript"
                                                src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                                                async>
                                                {
                                      "interval": "1m",
                                      "width": "100%",
                                      "isTransparent": true,
                                      "height": "600",
                                      "symbol": "BITSTAMP:BTCUSD",
                                      "showIntervalTabs": true,
                                      "displayMode": "multiple",
                                      "locale": "en",
                                      "colorTheme": "light",
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
                </div>

                <div class="row">
                    <div class="card w-100">
                        <div class="card-header anime py-2" style="border-bottom: 1px solid #eee;">
                            Live Trade Session
                        </div>
                        <div class="card-body p-0">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div id="tradingview_19631">
                                    <div id="tradingview_bffd7-wrapper"
                                        style="position: relative; box-sizing: content-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; margin: 0px auto !important; padding: 0px !important; width: auto; height: calc(568px);">
                                        <iframe title="advanced chart TradingView widget" lang="en"
                                            id="tradingview_bffd7" frameborder="0" allowtransparency="true"
                                            scrolling="no" allowfullscreen="true"
                                            src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22COINBASE%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_bffd7%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22hotlist%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22Dark%22%2C%22style%22%3A%220%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22www.elitestacksmarkets.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22COINBASE%3ABTCUSD%22%2C%22page-uri%22%3A%22www.elitestacksmarkets.com%2Faccount%2Findex.php%22%7D"
                                            style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"></iframe>
                                    </div>
                                </div>
                                <div class="tradingview-widget-copyright" style="width: 100%;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    new TradingView.widget({
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
                                        });
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