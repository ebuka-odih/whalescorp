@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Change Password
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('admin.storePassword') }}" method="POST" >
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


                            <div class="col-lg-8 col-xl-8">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Password</label>
                                    <input type="password" class="form-control" id="example-email-input" name="current_password" >
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">New Password</label>
                                    <input type="password" class="form-control" id="example-email-input" name="new_password" >
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Confirm New Password</label>
                                    <input type="password" class="form-control" id="example-email-input" name="new_confirm_password" >
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Update Password</button>
                            </div>
                        </div>

                        <!-- END Basic Elements -->


                    </form>
                </div>
            </div>
            <!-- END Elements -->
        </div>

        <!-- END Page Content -->
    </main>

@endsection
