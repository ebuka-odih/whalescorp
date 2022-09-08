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
                                        <h4 class="media media-single p-15 active">
                                            <a href="{{ route('user.profile') }}" >
                                                <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">My Profile</span>
                                            </a>
                                        </h4>
                                        <h4 class="media media-single p-15">
                                            <a href="{{ route('user.editProfile') }}">
                                                <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Edit Profile</span>
                                            </a>
                                        </h4>
                                        <h4 class="media media-single p-15">
                                            <a href="{{ route('user.security') }}">
                                                <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Security</span>
                                            </a>
                                        </h4>
{{--                                        <h4 class="media media-single p-15">--}}
{{--                                            <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Reports</span>--}}
{{--                                        </h4>--}}
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
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="width:100%">
                                            <tr>
                                                <th>Joined At:</th>
                                                <td>{{ date('d M, Y', strtotime($user->created_at)) }}</td>
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
                                                <th>Username:</th>
                                                <td>{{ $user->username }}</td>
                                            </tr>
                                            <tr>
                                                <th>Telephone:</th>
                                                <td>{{ $user->phone ? : "N/A" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Telegram:</th>
                                                <td>{{ "@".$user->telegram ? : "N/A" }}</td>
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
                                        </table>
                                    </div>
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
