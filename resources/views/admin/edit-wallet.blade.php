@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Dashboard
                    </h1>
                    <p class="fw-medium mb-0 text-muted">
                        Welcome, admin!
                    </p>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Wallet</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.wallet.update', $wallet->id) }}" method="POST" enctype="multipart/form-data" >
                        <!-- Basic Elements -->
                        @csrf
                        @method('PATCH')
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
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Name</label>
                                    <input type="text" class="form-control" id="example-text-input" name="name" value="{{ old('name', optional($wallet)->name) }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Value</label>
                                    <input type="text" class="form-control" id="example-email-input" name="value"  value="{{ old('value', optional($wallet)->value) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Update</button>
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
