@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        All Withdrawal
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            @if(session()->has('updated'))
                <div class="alert alert-success">
                    {{ session()->get('updated') }}
                </div>
            @endif
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr>
                                                <th class="text-center sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">User</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Amount</th>
                                                {{--                                            <th class="d-none d-sm-table-cell sorting"  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Payment Detail</th>--}}
                                                <th  class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Status</th>
                                                <th  class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Progress</th>
                                                <th  class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($withdrawal as $item)
                                                <tr class="odd">
                                                    <td class="fw-semibold"> {{ date('d-M-y', strtotime($item->created_at)) }}</td>
                                                    <td class="fw-semibold">{{ $item->user['name'] }} (@convert($item->user['balance']))</td>
                                                    <td class="fw-semibold">$ {{ $item->amount }}</td>
                                                    {{--                                                <td class="d-none d-sm-table-cell"> {{ $item->withdraw_method->acctLabel() }}</td>--}}
                                                    <td class="d-none d-sm-table-cell"> {!! $item->adminStatus() !!}</td>
                                                    <td class="d-none d-sm-table-cell text-success"> {{ $item->percent }}%</td>
                                                    <td>
                                                        @if($item->status == 0)
                                                            <a type="button" class="btn btn-sm btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-popin{{ $item->id }}">Action</a>
{{--                                                            <a href="{{ route('admin.approve_withdrawal', $item->id) }}" class="btn btn-sm btn-success mb-1">Approve</a>--}}
                                                        @else
                                                        @endif
                                                        <form method="POST" action="{!! route('admin.delete_withdrawal', $item->id) !!}" accept-charset="UTF-8">
                                                            <input name="_method" value="DELETE" type="hidden">
                                                            {{ csrf_field() }}

                                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Withdrawl?&quot;)">
                                                                    <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                </button>
                                                            </div>

                                                        </form>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="modal-block-popin{{ $item->id }}" tabindex="-1" aria-labelledby="modal-block-popin"  aria-modal="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-popin" role="document">
                                                        <div class="modal-content">
                                                            <div class="block block-rounded block-themed block-transparent mb-0">
                                                                <div class="block-header bg-primary-dark">
                                                                    <h3 class="block-title">Customize Trade</h3>
                                                                    <div class="block-options">
                                                                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                                                            <i class="fa fa-fw fa-times"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="block-content">
                                                                    <form action="{{ route('admin.withdrawPercent', $item->id) }}" method="POST">
                                                                        @csrf
                                                                        {{--                            @method('PATCH')--}}

                                                                        {{--                                                                                <input type="hidden" name="trade_id" value="{{ $item->id }}">--}}
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <label for="">Select Percent</label>
                                                                                <select name="percent" id="" class="form-control">
                                                                                    <option value="10">10%</option>
                                                                                    <option value="20">20%</option>
                                                                                    <option value="30">30%</option>
                                                                                    <option value="40">40%</option>
                                                                                    <option value="50">50%</option>
                                                                                    <option value="60">60%</option>
                                                                                    <option value="70">70%</option>
                                                                                    <option value="80">80%</option>
                                                                                    <option value="90">90%</option>
                                                                                    <option value="100">100%</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-lg-6">
                                                                                <button type="submit" class="btn btn-primary col-lg-6 mt-2">Update</button>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <a href="{{ route('admin.approve_withdrawal', $item->id) }}" class="btn btn-success">Approve</a>
                                                                            </div>
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
            <!-- END Page Content -->
    </main>

@endsection
