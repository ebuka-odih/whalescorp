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
                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Withdraw Method</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                            <th class="pull-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($withdraw as $item)
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-warning hover-warning">{{ date('d M, Y', strtotime($item->created_at)) }}</a>
                                                </td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->wallet_address }}</td>
                                                <td class="text-success">{{ $item->percent }}%</td>
                                                <td>{!! $item->status() !!}</td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <a class="pull-right" href="{{ route('user.withdraw.details', $item->id) }}"><i class="fa fa-eye fa-2x text-primary" title="View Deposit"></i></a>
                                                    @else
                                                       <p class="pull-right"> Null</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
