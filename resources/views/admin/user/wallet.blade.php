@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Add Wallet
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text text-center text-danger">You can make changes here that will reflect on the user dashboard</h3>
                    <div class="card-box table-responsive">
                        <h4 class="header-title"><b>Deposit of All Users</b></h4>

                        <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th class="wd-30p"> Name</th>
                                <th class="wd-60p">Action</th>
                                <th class="wd-60p">Value</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-capitalize">Bitcoin Wallet</td>
                                <td>
                                    <form action="{{ route('admin.storeWallet') }}" method="POST">
                                        @csrf
                                        <input class="form-control" name="wallet_id" value="{{ setting('wallet_id') }}" /><br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    {{--                                        <form action="" method="POST">--}}
                                    {{--                                            @csrf--}}
                                    {{--                                            <input type="file" class="form-control">--}}
                                    {{--                                        </form>--}}
                                </td>
                                <td>{{ setting('wallet_id') }}</td>
                            </tr>
                            <tr>
                                <td class="text-capitalize">Ethereum Wallet</td>
                                <td>
                                    <form action="{{ route('admin.storeWallet') }}" method="POST">
                                        @csrf
                                        <input class="form-control" name="eth_wallet" value="{{ setting('eth_wallet') }}" /><br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </td>
                                <td>{{ setting('eth_wallet') }}</td>
                            </tr>
                            <tr>
                                <td class="text-capitalize">USDT Wallet</td>
                                <td>
                                    <form action="{{ route('admin.storeWallet') }}" method="POST">
                                        @csrf
                                        <input class="form-control" name="usdt_wallet" value="{{ setting('usdt_wallet') }}" /><br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </td>
                                <td>{{ setting('litcoin_wallet') }}</td>
                            </tr>

                            <tr>
                                <td class="text-capitalize">Solana Wallet</td>
                                <td>
                                    <form action="{{ route('admin.storeWallet') }}" method="POST">
                                        @csrf
                                        <input class="form-control" name="sol_wallet" value="{{ setting('sol_wallet') }}" /><br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </td>
                                <td>{{ setting('btch_wallet') }}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- END Page Content -->
    </main>

@endsection
