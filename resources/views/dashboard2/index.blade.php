@extends('dashboard.layout.app')
@section('content')

    <div class="markets-capital pt70 pb40">
        <div class="container">
            <div class="row">
                <div  class="col-lg-4 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <img src="{{ asset('img/usd.png') }}" alt="ETH">
                            <span>Balance</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert(auth()->user()->balance)</h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <img src="{{ asset('img/usd2.png') }}" alt="EOS">
                            <span>Profit</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert(auth()->user()->profit)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <img src="{{ asset('img/usd4.png') }}" alt="LTC">
                            <span>Bonus</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert(auth()->user()->ref_bonus)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-3 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <span>Total Deposits</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert($deposits)</h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <span>Total Withdrawal</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert($withdrawal)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
{{--                            <img src="{{ asset('img/usd4.png') }}" alt="LTC">--}}
                            <span>Total Traded</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$@convert($trade)</h4>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-3 col-md-4 col-sm-6">
                    <div style="height: 200px" class="markets-capital-item">
                        <h2>
                            <span>Total Subscribed</span>
                        </h2>
                        <div class="markets-capital-details">
                            <h4>$431,684,298.45</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                            {
                                "width": "100%",
                                "height": 400,
                                "currencies": [
                                "EUR",
                                "USD",
                                "JPY",
                                "GBP",
                                "CHF",
                                "AUD",
                                "CAD",
                                "NZD",
                                "CNY",
                                "TRY",
                                "SEK",
                                "NOK"
                            ],
                                "isTransparent": false,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>

@endsection
