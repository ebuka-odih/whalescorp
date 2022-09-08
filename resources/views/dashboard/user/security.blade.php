@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper" style="min-height: 309px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Profile</h3>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">

                        <!-- Profile Image -->
                        <div class="box">
                            <div class="box-body box-profile">
                                <img class="rounded img-fluid mx-auto d-block max-w-150" src="{{ auth()->user()->profile_pic }}" alt="User profile picture">

                                <h3 class="profile-username text-center mb-0">{{ $user->name }}</h3>

                                <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>{{ $user->email }}</h4>


                                <div class="row">
                                    <div class="col-12">
                                        <div class="media-list media-list-hover media-list-divided w-p100 mt-30">
                                            <h4 class="media media-single p-15">
                                                <a href="{{ route('user.profile') }}">
                                                    <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">My Profile</span>
                                                </a>
                                            </h4>
                                            <h4 class="media media-single p-15">
                                                <a href="{{ route('user.editProfile') }}">
                                                    <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Edit Profile</span>
                                                </a>
                                            </h4>
                                            <h4 class="media media-single p-15">
                                                <a href="{{ route('user.security') }}" class="active">
                                                    <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Security</span>
                                                </a>
                                            </h4>
{{--                                            <h4 class="media media-single p-15">--}}
{{--                                                <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Reports</span>--}}
{{--                                            </h4>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Personal details</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('user.updateProfile') }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if(session()->has('success'))
                                                <div class="alert alert-success alert-dismissible fade show">
                                                    {{ session()->get('success') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Current Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="current_password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="new_password" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Confirm New Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="new_confirm_password" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-warning">Change Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>

@endsection
