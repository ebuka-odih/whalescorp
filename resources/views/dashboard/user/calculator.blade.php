@extends('dashboard.layout.app')
@section('content')

    <script>
        var nhiframe = document.getElementById('nhiframe');
        window.addEventListener('message', function (e) {
            // message that was passed from iframe page
            // check message content if you have other messages too
            let message = e.data;
            nhiframe.style.height = message.height + 'px';
        }, false);
    </script>
    <style>
        iframe {
            width: 100%;
            max-width: 400px;
            border: 0;  /* to remove default border */
        }
    </style>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Mining Calculator</h4>
                            </div>
                            <!-- /.box-header -->

                            <div style="margin: 10px">
                                <a class="minerstat-widget" title="BTC mining calculator" data-coin="BTC" data-algo="SHA-256" data-info="yes" data-style="light" data-color="" data-unit="TH" data-hashrate="100" data-width="300" rel="nofollow" href="https://minerstat.com/coin/BTC">Bitcoin mining calculator</a><script async src="https://api.minerstat.com/v2/widgets/coin.js" charset="utf-8"></script>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Crypto Countdowns
                                </h4>
                            </div>
                            <!-- /.box-header -->
                            <iframe src="https://widget.nicehash.com/countdown" width="100%" height="350" scrolling="yes" id="nhiframe"></iframe>

                        </div>
                        <!-- /.box -->
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
