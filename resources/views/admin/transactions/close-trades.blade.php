@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Close Trades History
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

                                    <div class="block block-rounded">
                                        <div class="block-header block-header-default">
                                            {{--                                            <h3 class="block-title">Full Table</h3>--}}
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option">
                                                    <i class="si si-settings"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped ">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>User</th>
                                                        <th>Symbol</th>
                                                        <th>Amount</th>
                                                        <th>Leverage</th>
                                                        <th>Time Frame</th>
                                                        <th>TP/SL</th>
                                                        <th>Status</th>
                                                        <th>Profit</th>
                                                        <th>Progress</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($trades as $item)
                                                        <tr>
                                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->user->name }}</td>
                                                            <td>{{ $item->symbol }}</td>
                                                            <td>$@convert($item->amount)</td>
                                                            <td>{{ $item->leverage }}</td>
                                                            <td>{{ $item->execution_time }} Secs</td>
                                                            <td>{{ $item->tp ? : "" }}/ {{ $item->sl ? : "" }}</td>
                                                            <td class="-pull-right">{!! $item->adminStatus() !!}</td>
                                                            <td>$@convert($item->profit)</td>
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
            </div>
        </div>
        <!-- END Page Content -->
    </main>


    <div class="modal fade" id="modal-block-popin" tabindex="-1" aria-labelledby="modal-block-popin"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-popin" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modal Title</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="">
                            <div class="row">
                                <input type="date" class="form-control" name="created_at" >
                                <button type="submit" class="btn btn-primary col-lg-6 mt-2">Update Date</button>
                            </div>
                        </form>
                        <br>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
