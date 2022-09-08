@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Withdrawal History</h4>
                            </div>
                            <!-- /.box-header -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Summary</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover no-margin">
                                        <tbody>
                                        <tr>
                                            <td>Address</td>
                                            <td><a href="#">{{ $withdraw->withdraw_method->value }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Hash</td>
                                            <td><a href="#">{{ $withdraw->transId() }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>{{ date('d M, y', strtotime($withdraw->created_at)) }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Transactions</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover no-margin">
                                        <tbody>
                                        <tr>
                                            <td>Amount</td>
                                            <td><span class="text-success">@convert($withdraw->amount) USD</span></td>
                                            <td><i class="fa fa-bar-chart"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Total Sent</td>
                                            <td><span class="text-success">{{ auth()->user()->BTCbalance($withdraw->amount) }} BTC</span></td>
                                            <td><i class="fa fa-bar-chart"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Total Received</td>
                                            <td><span class="text-success">{{ auth()->user()->BTCbalance($withdraw->amount) }} BTC</span></td>
                                            <td><i class="fa fa-bar-chart"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
