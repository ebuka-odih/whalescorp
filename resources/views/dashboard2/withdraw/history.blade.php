@extends('dashboard.layout.app')
@section('content')

    <div class="settings mtb15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Deposit Transactions History</h5>
                            <div class="wallet-history">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($withdraw as $item)
                                            <tr>
                                                <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->wallet_address }}</td>
                                                <td class="-pull-right">{!! $item->status() !!}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
