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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="page-title">Subscriptions Plans</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('insufficient'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('insufficient') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                        @if(session()->has('declined'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('declined') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

                <div class="row mt-30">
                    @foreach($plans as $item)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box box-body pull-up">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <img height="50" width="50" src="{{ asset('img/usd2.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="no-margin">{{ $item->name }}</h3>
                                    </div>

                                </div>
                                <div class="flexbox align-items-center mt-25">
                                    <table class="table-striped" style="width:100%">

                                        <tr>
                                            <th>Amount USD:</th>
                                            <td>$@convert($item->amount)</td>
                                        </tr>
                                        <tr>
                                            <th>Term:</th>
                                            <td> {{ $item->term_days }} Day(s)</td>
                                        </tr>
                                        <tr>
                                            <th>Total Return:</th>
                                            <td class="text-success">{{ $item->total_return }}%</td>
                                        </tr>

                                    </table>

                                </div>
                                <form class="mt-3 mb-3" action="{{ route('user.subscribe') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="subscription_id">
                                    <input style="border: 1px solid white" type="text" class="form-control" name="amount" placeholder="Enter Amount">

                                    <button type="submit" class="btn btn-warning btn-block m-t-30 mt-3">Purchase
                                    </button>
                                </form>

                                {{--                                <a href="{{ route('user.pool.details', $item->id) }}" class="btn btn-warning">Purchase</a>--}}

                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>



@endsection
