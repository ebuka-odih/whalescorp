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
                                <h4 class="box-title">Make Withdrawal</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form" method="POST" action="{{ route('user.processWithdraw') }}">
                                @csrf
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
                                @if(session()->has('declined'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('declined') }}
                                    </div>
                                @endif
                                @if(session()->has('nop'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('nop') }}
                                    </div>
                                @endif
                                @if(session()->has('low_balance'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('low_balance') }}
                                    </div>
                                @endif
                                @if(session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_message') }}
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
                                                <label for="">Enter Bitcoin Address</label>
                                                <input type="text" name="wallet_address" class="form-control">
                                                <p class="text-danger">Please enter a correct BTC wallet address</p>
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
                <div class="box">
                    <div class="box-body">
                        <hr class="my-15">
                        <h4>Note:</h4>
                        <h4 class="text-danger">
                            Must Withdrawal Requests
                            Only Be Made At Certain
                            Times?
                        </h4>
                        <p style="font-size: 16px">

                            Requests for withdrawals can be made when your trades are completed and easy access via the Prepstation site. The
                            requests will be processed immediately,
                            and during the relevant financial
                            institutions' business hours.
                        </p>

                        <h4 class="text-danger"> Is There A Withdrawal Limit?</h4>

                        <p style="font-size: 16px">
                            Withdrawals are capped at the amount of
                            funds that are currently in the account.
                        </p>

                        <h4 class="text-danger">
                            How Long Does It Take To Get
                            My Money?
                        </h4>

                        <p style="font-size: 16px">
                            Withdrawal requests are addressed and
                            handled as quickly as possible.
                        </p>
                        <h4 class="text-danger"> Note</h4>
                        <p style="font-size: 16px">
                            At PrepStation payouts can be withdrawn via
                            a bitcoin wallet or bank account.
                            If your withdrawal method isn't available
                            you can contact your account manager
                            with submitted withdrawal details which
                            will be approved.
                        </p>
                        <ul>
                            <li>Withdrawal amount have limits ranging from your account plans.</li>
                            <li>Withdrawal request can be cancelled  after submission if not yet approved.</li>
                        </ul>



                        <h4>NB:</h4>

                        <p style="font-size: 16px">it's important to note that a onetime
                            tax fee of 15% of your total investment
                            profits must be paid by new investors
                            before your withdrawals can be cleared
                            and sent.
                        </p>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
