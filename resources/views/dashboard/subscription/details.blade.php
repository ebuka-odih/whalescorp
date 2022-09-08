@extends('dashboard.layout.app')
@section('content')
    <style>
        table, th, td {
            /*border: 1px solid black;*/
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">


                <div class="row">
                    <div class="col-lg-12 col-12">
                        <table class="table table-striped" style="width:100%">
                            <tr>
                                <th>Name:</th>
                                <td> {{ $sub->subscription->name }}</td>
                            </tr>
                            <tr>
                                <th>Amount:</th>
                                <td> {{ $sub->subscription->amount }}</td>
                            </tr>
                            <tr>
                                <th>Term Day(s):</th>
                                <td>{{ $sub->subscription->term_days }} Day(s)</td>
                            </tr>
                            <tr>
                                <th>Total Return(%):</th>
                                <td>{{ $sub->subscription->total_return }}%</td>
                            </tr>
                        </table>
                        <br>
                        <table class="table table-striped" style="width:100%">
                            <tr>
                                <th>Ordered Date:</th>
                                <td>{{ date('M d, Y', strtotime($sub->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Approved Date:</th>
                                <td>{{ date('M d, Y', strtotime($sub->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Term start at:</th>
                                <td>{{ date('M d, Y', strtotime($sub->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Term End at:</th>
                                <td>{{ date('M d, Y', strtotime($sub->ending_date())) }}</td>
                            </tr>
                        </table>
                        <br>
                        <table class="table table-striped" style="width:100%">
                            <tr>
                                <th>Status:</th>
                                <td>{!! $sub->status() !!}</td>
                            </tr>
                            <tr>
                                <th>Capital($):</th>
                                <td>@convert($sub->amount) USD</td>
                            </tr>
                            <tr>
                                <th>Total Return(%):</th>
                                <td>{{ $sub->subscription->total_return }}%</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <th>Total Return($):</th>--}}
{{--                                <td>$@convert($sub->total_return())</td>--}}
{{--                            </tr>--}}

                            <tr>
                                <td colspan="2"></td>
                            </tr>

                            <tr>
                                <td colspan="2"></td>
                            </tr>

                            <tr>
                                <th>Profit Earned($):</th>
                                <td>{{ $sub->profit  }} USD</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>


@endsection
