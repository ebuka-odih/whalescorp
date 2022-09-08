@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div  class="col-12 col-lg-6 ">
                        <div class="box box-body pull-up bg-primary">
                            <a href="{{ route('user.trade.history') }}" >
                                <div class="d-flex justify-content-between">
                                    <div class="p-0">
                                        <div>
                                            <h3 class="no-margin text-bold text-white">Open Trades</h3>
                                            <span class="text-white">{{ $counts }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="box box-body pull-up">
                            <a href="{{ route('user.closeTrades') }}">
                                <div class="d-flex justify-content-between">
                                    <div class="p-0">
                                        <div>
                                            <h3 class="no-margin text-bold text-white">Close Trades</h3>
                                            <span class="text-white">{{ $close_counts }}</span>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-body">
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
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
