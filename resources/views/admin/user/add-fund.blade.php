@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Fund Account
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Block Tabs Animated Fade -->
                    <div class="block block-rounded">
                        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                            <li class="nav-item">
                                <a href="" class="nav-link active" id="btabs-animated-fade-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-home" role="tab" aria-controls="btabs-animated-fade-home" aria-selected="true">Add Bank Payment Method</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Block Tabs Animated Fade -->
                </div>

                <div class="col-lg-6">
                    <!-- Block Tabs Animated Fade -->
                    <div class="block block-rounded">
                        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                            <li class="nav-item">
                                <a href="" class="nav-link" id="btabs-animated-fade-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-profile" role="tab" aria-controls="btabs-animated-fade-profile" aria-selected="false">Add Crypto Payment Method</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Block Tabs Animated Fade -->
                </div>

            </div>
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('admin.sendFund') }}" method="POST" >
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
                            <div class="col-lg-6 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">User</label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label"  for="example-email-input">Type of Fund</label>
                                    <select name="type" id="" class="form-control ">
                                        <option disabled selected>Select </option>
                                        <option value="Bonus">Bonus</option>
                                        <option value="Profit">Profit</option>
                                        <option value="Referral-Bonus">Referral Bonus</option>
                                        <option value="Loss">Loss</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Amount</label>
                                    <input type="text" class="form-control" id="example-email-input" name="amount" >
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Send</button>
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
