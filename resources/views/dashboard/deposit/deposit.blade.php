@extends('dashboard.layout.app')
@section('content')
    <style>
        iframe {
            width: 100%;
            max-width: 400px;
            border: 0; /* to remove default border */
        }
    </style>
    <script>
        var nhiframe = document.getElementById('nhiframe');
        window.addEventListener('message', function (e) {
            // message that was passed from iframe page
            // check message content if you have other messages too
            let message = e.data;
            nhiframe.style.height = message.height + 'px';
        }, false);
    </script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Make Deposit</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form" method="POST" action="{{ route('user.processDeposit') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="box-body">
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" name="amount" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Payment Method</label>
                                                <select name="payment_method_id" id="" class="form-control">
                                                    @foreach($wallets as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <p class="text-danger">Please select a deposit method</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-rounded btn-warning btn-outline mr-1">
                                        <i class="ti-save"></i> Proceed
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Account Balance</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="box box-solid bg-secondary">
                                                <div class="box-header">
                                                    <h4 class="box-title"><strong>Main Balance</strong></h4>
                                                    <h4>
                                                        @convert(auth()->user()->balance) USD
                                                    </h4>
                                                    <h4>
                                                        {{ auth()->user()->BTCbalance(auth()->user()->balance) }} BTC
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="box box-solid bg-primary">
                                                <div class="box-header">
                                                    <h4 class="box-title"><strong>Profit Balance</strong></h4>
                                                    <h4>
                                                        @convert(auth()->user()->profit) USD
                                                    </h4>
                                                    <h4>
                                                        {{ auth()->user()->BTCbalance(auth()->user()->profit) }} BTC
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <!-- /.box -->
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
