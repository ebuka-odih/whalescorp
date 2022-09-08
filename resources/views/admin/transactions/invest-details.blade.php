@extends('admin.layout.app')
@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Investment Details
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>User info</h4>
                                    <table style="width:100%">
                                        <tr>
                                            <th>Name:</th>
                                            <td>{{ $deposit_detail->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td>{{ $deposit_detail->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Telephone:</th>
                                            <td>{{ $deposit_detail->user->phone }}</td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h4>Investment info</h4>
                                    <table style="width:100%">
                                        <tr>
                                            <th>Investment Name:</th>
                                            <td>{{ $deposit_detail->package->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Invested Amount:</th>
                                            <td>$@convert($deposit_detail->amount)</td>
                                        </tr>
                                        <tr>
                                            <th>Term Day(s):</th>
                                            <td>{{ $deposit_detail->package->term_days }} Day(s)</td>
                                        </tr>
                                        <tr>
                                            <th>Daily Interest:</th>
                                            <td>{{ $deposit_detail->package->daily_interest }}%</td>
                                        </tr>
                                        <tr>
                                            <th>Status:</th>
                                            <td>{!! $deposit_detail->adminStatus() !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Term start at:</th>
                                            <td>{{ date('M d, Y h:i A', strtotime($deposit_detail->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Term start at:</th>
                                            <td>{{ date('M d, Y h:i A', strtotime($deposit_detail->ending_date())) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Profit Earned:</th>
                                            <td>$@convert($deposit_detail->earning)</td>
                                        </tr>
                                        <tr>
                                            <th>Total Earned:</th>
                                            <td>$@convert($deposit_detail->total_earned)</td>
                                        </tr>
                                        <tr>
                                            <th>Total Earned + Investment:</th>
                                            <td>$@convert($deposit_detail->total_earned + $deposit_detail->amount)</td>
                                        </tr>
                                    </table>

                                    @if($deposit_detail->pause == 0)
                                        <form class="mt-3" action="{{ route('admin.resumeInvestment') }}" method="GET">
                                            @csrf
                                            <input type="hidden" value="{{ $deposit_detail->id }}" name="dep_id">
                                            <button class="btn btn-success" type="submit">Resume Investment</button>
                                        </form>
                                    @else
                                        <form class="mt-3" action="{{ route('admin.resumeInvestment') }}" method="GET">
                                            @csrf
                                            <input type="hidden" value="{{ $deposit_detail->id }}" name="dep_id">
                                            <button class="btn btn-warning" type="submit">Pause Investment</button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
    </main>

@endsection
