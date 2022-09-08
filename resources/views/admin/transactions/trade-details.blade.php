@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Open Trades History
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
                                <div class="col-lg-12">

                                    <div class="block block-rounded">

                                        <div class="block-content">
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if(session()->has('closed'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('closed') }}
                                                </div>
                                            @endif
                                            @if(session()->has('updated'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('updated') }}
                                                </div>
                                            @endif

                                                <div class="block-content">
                                                    <form action="{{ route('admin.setTrade', $item->id) }}" method="POST">
                                                        @csrf
                                                        {{--                            @method('PATCH')--}}

                                                        {{--                                                                                <input type="hidden" name="trade_id" value="{{ $item->id }}">--}}
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="">Profit</label>
                                                                <input type="text" class="form-control" name="profit" value="{{ old('profit', optional($item)->profit) }}">
                                                            </div>
                                                            <div class="col-lg-6">
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
                                                                <a href="{{ route('admin.closeTrade', $item->id) }}" class="btn btn-success">Close Trade</a>
                                                            </div>
                                                        </div>

                                                    </form>
                                                    <br>
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
