@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="col-md-10 offset-lg-1 col-12">
                            <div class="media flex-column text-center p-40 bg-white mb-20">
                              <span class="avatar avatar-xxl bg-success opacity-60 mx-auto">
                                <i class="align-sub fa fa-check font-size-40"></i>
                              </span>
                                <div class="mt-20">
                                    <h6 class="text-uppercase fw-500 text-black">Withdrawal Sent Successfully, Awaiting Approval!</h6>
                                    <p>Your withdrawal requested amount will be sent to your wallet once confirmed</p>
                                    <br>
                                    <h4>Withdrawal Progress: <span class="text-danger">{{ $withdraw->percent }}%</span></h4>
                                    <hr>
                                    <a href="{{ route('user.withdraw') }}" class="btn btn-primary">Withdrawal Again</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
