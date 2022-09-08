@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Wallet</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.wallet.store') }}" method="POST" enctype="multipart/form-data" >
                        <!-- Basic Elements -->
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row push">
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Name</label>
                                    <input type="text" class="form-control" id="example-text-input" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Value</label>
                                    <input type="text" class="form-control" id="example-email-input" name="value" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Create</button>
                            </div>
                        </div>

                        <!-- END Basic Elements -->


                    </form>
                </div>
            </div>
            <!-- END Elements -->
        </div>
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Wallets <small>Full</small></h3> </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr>
                                        <th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                        <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Value</th>
                                        <th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wallets as $index => $item)
                                        <tr class="odd">
                                            <td class="text-center sorting_1">{{ $index + 1 }}</td>
                                            <td class="fw-semibold"> {{ $item->name }}</td>
                                            <td class="d-none d-sm-table-cell"> {{ $item->value }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary mb-2" href="{{ route('admin.wallet.edit', $item->id) }}">Edit</a>
                                                <form method="POST" action="{!! route('admin.wallet.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                    <input name="_method" value="DELETE" type="hidden">
                                                    {{ csrf_field() }}

                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                        <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Wallet?&quot;)">
                                                            <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                        </button>

                                                    </div>

                                                </form>
                                            </td>
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
        <!-- END Page Content -->
    </main>

@endsection
