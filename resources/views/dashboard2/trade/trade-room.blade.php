@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="market-trade">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab" aria-selected="true"><h4>Place A Trade</h4></a>
                        </li>
                    </ul>
                    <div class="container">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
                            <div class="d-flex justify-content-between">
                                <div class="market-trade-buy">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('user.placeTrade') }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Symbol</span>
                                            </div>
                                            <select name="symbol" class="form-control" id="">
                                                <option value="USD/EUR">USD/EUR</option>
                                                <option value="USD/JPY">USD/JPY</option>
                                                <option value="GBP/USD">GBP/USD</option>
                                                <option value="NZD/USD">NZD/USD</option>
                                                <option value="USD/CAD">USD/CAD</option>
                                                <option value="AUD/USD">AUD/USD</option>
                                                <option value="EUR/CHF">EUR/CHF</option>
                                            </select>

                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">USD</span>
                                            </div>
                                            <input type="number" name="amount" class="form-control" placeholder="Amount">
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Execution Time</span>
                                            </div>
                                            <select name="execution_time" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="60">1 Minutes</option>
                                                <option value="180">3 Minutes</option>
                                                <option value="300">5 Minutes</option>
                                                <option value="600">10 Minutes</option>
                                                <option value="1800">30 Minutes</option>
                                                <option value="3600">1 Hour</option>
                                                <option value="604800">1 Week</option>
                                                <option value="2628000">1 Month</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Leverage</span>
                                            </div>
                                            <select name="leverage" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="5x">5x</option>
                                                <option value="25x">25x</option>
                                                <option value="50x">50x</option>
                                                <option value="75x">75x</option>
                                                <option value="100x">100x</option>
                                                <option value="125x">125x</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="number" class="form-control" name="sl" placeholder="Stop Loss">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="number" class="form-control" name="tp" placeholder="Take Profit">
                                                </div>
                                            </div>
                                        </div>

                                        <p>Available: <span>{{ auth()->user()->BTCbalance(auth()->user()->balance) }} BTC = @convert(auth()->user()->balance) USD</span></p>

                                        <div class="input-row">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button name="buy" value="buy" type="submit" class="btn buy">Buy</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button name="sell" value="sell" type="submit" class="btn sell">Sell</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-chart">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_e8053"></div>
                        <script src="http://s3.tradingview.com/tv.js"></script>
                        <script>
                            new TradingView.widget(
                                {
                                    "width": "100%",
                                    "height": 550,
                                    "symbol": "BITSTAMP:BTCUSD",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "Dark",
                                    "style": "1",
                                    "locale": "en",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "withdateranges": true,
                                    "hide_side_toolbar": false,
                                    "allow_symbol_change": true,
                                    "show_popup_button": true,
                                    "popup_width": "1000",
                                    "popup_height": "650",
                                    "container_id": "tradingview_e8053"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

            </div>
            <div class="col-md-2">
                <div class="order-book">
                    <h2 class="heading">Order Book</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Price(BTC)</th>
                            <th>Amount(ETH)</th>
                            <th>Total(ETH)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="red-bg-80">
                            <td class="red">0.022572</td>
                            <td>1.253415</td>
                            <td>15.27648</td>
                        </tr>
                        <tr class="red-bg-60">
                            <td class="red">0.020371</td>
                            <td>1.205415</td>
                            <td>15.25648</td>
                        </tr>
                        <tr class="red-bg-40">
                            <td class="red">0.023572</td>
                            <td>1.645415</td>
                            <td>15.23648</td>
                        </tr>
                        <tr class="red-bg-20">
                            <td class="red">0.032378</td>
                            <td>1.206715</td>
                            <td>15.25348</td>
                        </tr>
                        <tr class="red-bg-10">
                            <td class="red">0.022573</td>
                            <td>1.262415</td>
                            <td>15.19648</td>
                        </tr>
                        <tr class="red-bg-8">
                            <td class="red">0.154377</td>
                            <td>1.225415</td>
                            <td>15.35648</td>
                        </tr>
                        <tr class="red-bg-5">
                            <td class="red">0.120373</td>
                            <td>1.285415</td>
                            <td>15.25648</td>
                        </tr>
                        <tr class="red-bg">
                            <td class="red">0.028576</td>
                            <td>1.291415</td>
                            <td>15.26448</td>
                        </tr>
                        </tbody>
                        <tbody class="ob-heading">
                        <tr>
                            <td>
                                <span>Last Price</span>
                                0.020367
                            </td>
                            <td>
                                <span>USD</span>
                                148.65
                            </td>
                            <td class="red">
                                <span>Change</span>
                                -0.51%
                            </td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr class="green-bg">
                            <td class="green">0.158373</td>
                            <td>1.209515</td>
                            <td>15.23248</td>
                        </tr>
                        <tr class="green-bg-5">
                            <td class="green">0.020851</td>
                            <td>1.206245</td>
                            <td>15.25458</td>
                        </tr>
                        <tr class="green-bg-8">
                            <td class="green">0.025375</td>
                            <td>1.205715</td>
                            <td>15.65648</td>
                        </tr>
                        <tr class="green-bg-10">
                            <td class="green">0.020252</td>
                            <td>1.205495</td>
                            <td>15.24548</td>
                        </tr>
                        <tr class="green-bg-20">
                            <td class="green">0.020373</td>
                            <td>1.205415</td>
                            <td>15.25648</td>
                        </tr>
                        <tr class="green-bg-40">
                            <td class="green">0.020156</td>
                            <td>1.207515</td>
                            <td>15.28948</td>
                        </tr>
                        <tr class="green-bg-60">
                            <td class="green">0.540375</td>
                            <td>1.205915</td>
                            <td>15.25748</td>
                        </tr>
                        <tr class="green-bg-80">
                            <td class="green">0.020372</td>
                            <td>1.205415</td>
                            <td>15.25648</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12 m-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Symbol</th>
                            <th>Amount</th>
                            <th>Leverage</th>
                            <th>Time Frame</th>
                            <th>TP/SL</th>
                            <th>Status</th>
                            <th>Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trades as $item)
                            <tr>
                                <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                <td>{{ $item->symbol }}</td>
                                <td>$@convert($item->amount)</td>
                                <td>{{ $item->leverage }}</td>
                                <td>{{ $item->execution_time }} Secs</td>
                                <td>{{ $item->tp ? : "" }}/ {{ $item->sl ? : "" }}</td>
                                <td class="-pull-right">{!! $item->status() !!}</td>
                                @if($item->percent != 100)
                                <td class="pull-right text-danger">{{ $item->percent ? : "1" }}%</td>
                                @else
                                    <td class="pull-right text-success">{{ $item->percent  }}%</td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <a href="{{ route('user.trade.history') }}" class="text-primary text-center mt-3">View Trade History</a>

            </div>
        </div>
    </div>

{{--    <div class="input-group">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="input-group-append">--}}
{{--                    <span class="input-group-text">Open Rate</span>--}}
{{--                </div>--}}
{{--                <input type="number" class="form-control" name="open_rate" placeholder="Open Rate">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="input-group-append">--}}
{{--                    <span class="input-group-text">Close Rate</span>--}}
{{--                </div>--}}
{{--                <input type="number" class="form-control" name="close_rate" placeholder="Close Rate">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
