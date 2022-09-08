@extends('dashboard.layout.app')
@section('content')
    <style>
        iframe {
            width: 100%;
            max-width: 400px;
            border: 0; /* to remove default border */
        }
    </style>
    <script>
        var nhiframe = document.getElementById('nhiframe');
        window.addEventListener('message', function (e) {
            // message that was passed from iframe page
            // check message content if you have other messages too
            let message = e.data;
            nhiframe.style.height = message.height + 'px';
        }, false);
    </script>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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

                    <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Deposit Info</h4>
                            </div>
                            <!-- /.box-header -->
                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Amount:</th>
                                    <td>$@convert($deposit->amount)</td>
                                </tr>
                                <tr>
                                    <th>Payment Method:</th>
                                    <td>{{ $deposit->payment_method->name }}</td>
                                </tr>
                                <tr>
                                    <th>Created Date:</th>
                                    <td>{{ date('d M, Y', strtotime($deposit->created_at)) }}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Make Payment</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">
                                    <p class="text-danger">Make payment to the wallet below</p>
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                            <input readonly type="text" class="form-control" value="{{ $deposit->payment_method->name }}">
                                            </div>
                                         </div>
                                        <div class="col-md-12 col-12 mt-3">
                                                <h4>Scan QRCode</h4>
                                                {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label for="">Copy Address</label>
                                                <div class="input-group">

                                                    <input type="text" class="form-control " id="foo" value="{{ $deposit->payment_method->value }}">
                                                    <div class="input-group-addon">
                                                        <a class="btn input-group-addon" data-clipboard-target="#foo">
                                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                                        </a>
{{--                                                        <i class="fa fa-clipboard"></i>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modal-center">
                                                    Confirm Deposit
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <!-- /.box -->
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    <div class="modal center-modal fade" id="modal-center" tabindex="-1"  aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white">Payment Reference</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('user.processPayment') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-lg-12">
                        <label for="" class="text-white">Select Payment Screenshot</label>
                        <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">
                        <input name="reference" type="file" class="form-control-file">                            </div>
                    =</div>

                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-rounded btn-primary float-right">Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
