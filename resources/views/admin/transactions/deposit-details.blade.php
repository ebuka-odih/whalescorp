@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                         Deposit Details
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
                                            <h3 class="block-title">Deposit Details</h3>

                                        </div>
                                        <div class="block-content">

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-vcenter">
                                                    <tr>
                                                        <th>Date:</th>
                                                        <td> {{ date('d-M-y', strtotime($deposit->created_at)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>User:</th>
                                                        <td>{{ optional($deposit->user)->name }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Amount:</th>
                                                        <td>$@convert($deposit->amount)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Payment Method:</th>
                                                        <td>{{ optional($deposit->payment_method)->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status:</th>
                                                        <td> {!! $deposit->adminStatus() !!}</td>
                                                    </tr>

                                                </table>
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



@endsection
