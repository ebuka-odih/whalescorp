@extends('admin.layout.app')
@section('content')
    <style>
        .bg {
            background: url('img/bg.avif') no-repeat, #282d37;
        }
    </style>

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image bg" >
            <div class="bg-black-25">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" >
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('admin/assets/media/avatars/avatar10.jpg') }}" alt="">
                        </a>
                        <h1 class="fw-bold my-2 text-white">{{ $user->name }}</h1>
                        <h2 class="h4 fw-bold text-white-75">
                            <a class="text-primary-lighter" href="javascript:void(0)">{{ $user->email }}</a>
                        </h2>
                        <h2 class="h4 fw-bold text-white-75">
                            Account Balance <a class="text-primary-lighter" href="javascript:void(0)">${{ $user->balance ? : "0.0" }}</a>
                        </h2>

                        <a href="{{ route('admin.userDetails', $user->id) }}" class="btn btn-sm btn-secondary m-1">
                            <i class="fa fa-fw fa-user opacity-50 me-1"></i> Personal Details
                        </a>
                        <a href="{{ route('admin.fund') }}" class="btn btn-sm btn-info m-1">
                            <i class="fa fa-fw fa-dollar-sign opacity-50 me-1"></i> Fund Account
                        </a>
                        @if($user->status == 1)
                        <a href="{{ route('admin.suspend', $user->id) }}" class="btn btn-sm  btn-outline-danger m-1">
                            <i class="fa fa-times fa-dollar-sign opacity-50 me-1"></i> Suspend User
                        </a>
                        @else
                        <a href="{{ route('admin.unsuspend', $user->id) }}" class="btn btn-sm  btn-outline-success m-1">
                            <i class="fa fa-times fa-dollar-sign opacity-50 me-1"></i> Unsuspend User
                        </a>
                        @endif
                        <form method="POST" action="{!! route('admin.deleteUser', $user->id) !!}" accept-charset="UTF-8">
                            <input name="_method" value="DELETE" type="hidden">
                            {{ csrf_field() }}

                            <div class="btn-group btn-group-xs pull-right" role="group">
                                <button type="submit" class="btn btn-sm btn-danger m-1 js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Package?&quot;)">
                                    <i class="fa fa-times fa-dollar-sign opacity-50 me-1"></i> Delete User
                                </button>

                            </div>

                        </form>

{{--                        <a href="{{ route('admin.fund') }}" class="btn btn-sm btn-danger m-1">--}}
{{--                            <i class="fa fa-times fa-dollar-sign opacity-50 me-1"></i> Delete User--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            @if(session()->has('suspend'))
                <div class="alert alert-success">
                    {{ session()->get('suspend') }}
                </div>
            @endif
             @if(session()->has('unsuspend'))
                <div class="alert alert-success">
                    {{ session()->get('unsuspend') }}
                </div>
            @endif

            <!-- Latest Friends -->
            <h2 class="content-heading">
                <i class="si si-users me-1"></i> User Details
            </h2>
            <table class="table table-striped" style="width:100%">
                <tr>
                    <th>Date:</th>
                    <td>{{ date('d-M-Y', strtotime($user->created_at)) }}</td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{!! $user->status() !!}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $user->phone ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>Telegram:</th>
                    <td>{{ $user->phone ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td>{{ $user->country ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td>{{ $user->state ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td>{{ $user->city ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{ $user->address ? : "N/A" }}</td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td>{{ $user->pass ? : "N/A" }}</td>
                </tr>
            </table>
                <br>
            <hr>
                <form action="{{ route('admin.defundBal') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="user_id">

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="number" name="amount" class="form-control" >
                            <p>Bal: {{ $user->balance }}</p>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary">Defund Balance</button>
                        </div>
                    </div>
                </form>
                <hr>
                <br>
                <form action="{{ route('admin.defundProfit') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="user_id">

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="number" name="amount" class="form-control" >
                            <p>Profit: {{ $user->profit }}</p>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary">Defund Profit</button>
                        </div>
                    </div>
                </form>
                <hr>
                <br>
            <form action="{{ route('admin.editDate') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $user->id }}" name="user_id">

                <div class="row">
                    <div class="col-lg-6">
                        <input type="date" name="created_at" class="form-control" value="{{ old('created_at', optional($user)->created_at) }}">
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-primary">Change Date</button>
                    </div>
                </div>
            </form>

            <!-- END Latest Friends -->


            <!-- END Latest Projects -->


        </div>
        <!-- END Page Content -->
    </main>
@endsection
