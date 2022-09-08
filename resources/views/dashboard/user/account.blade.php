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
                                <h4 class="box-title">Setup withdrawal Wallet</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form" method="POST" action="{{ route('user.account.store') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="box-body">
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Wallet Name</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Wallet Address</label>
                                                <input type="text" name="value" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-rounded btn-warning btn-outline mr-1">
                                        <i class="ti-save"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Withdrawal Accounts</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Wallet Name</th>
                                            <th>Wallet Address</th>
                                            <th class="pull-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($wallets as $item)
                                        <tr>
                                            <td>
                                                <a href="#" class="text-warning hover-warning">{{ date('d M, Y', strtotime($item->created_at)) }}</a>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->value }}</td>
                                            <td>
                                                <form method="POST" action="{!! route('user.account.destroy', $item->id) !!}" accept-charset="UTF-8">
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
                        <!-- /.box -->
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
