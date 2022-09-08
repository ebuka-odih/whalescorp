@extends('dashboard.layout.app')
@section('content')

    <div class="settings mtb15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Trading History</h5>
                            <div class="wallet-history">
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
                                    {{ $trades->links() }}
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
