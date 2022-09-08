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
                                <h4 class="box-title">Deposits History</h4>
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
                                            <th>Plan</th>
                                            <th>Term Days</th>
                                            <th>Total Return</th>
                                            <th>Profit</th>
                                            <th>Status</th>
                                            <th class="pull-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sub as $item)
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-warning hover-warning">{{ date('d M, Y', strtotime($item->created_at)) }}</a>
                                                </td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->subscription->name }} </td>
                                                <td>{{ $item->subscription->term_days }} Day(s)</td>
                                                <td class="text-success">{{ $item->subscription->total_return }}%</td>
                                                <td>$@convert($item->profit) </td>
                                                <td>{!! $item->status() !!}</td>
                                                <td>
                                                <a class="pull-right" href="{{ route('user.sub.details', $item->id) }}"><i class="fa fa-eye fa-2x text-primary" title="View Subscription"></i></a>
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
