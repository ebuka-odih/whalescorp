@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                       Add NFT Collection
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
                    <form action="{{ route('admin.collectable.store') }}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-lg-6 col-xl-6">
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
                                    <label class="form-label" for="example-email-input">Name</label>
                                    <input type="text" class="form-control" id="example-email-input" name="name" >
                                </div>
                            </div>


                            <div class="col-lg-4 col-xl-4">
                                <div class="mb-4">
                                    <label class="form-label"  for="example-email-input">NFT Network Type</label>
                                    <select name="network" id="" class="form-control ">
                                        <option disabled selected>Select Network </option>
                                        <option value="ETH">Ethereum</option>
                                        <option value="BNB">BNB</option>
                                        <option value="SOL">Solana</option>
                                        {{--                                        <option value="Profit">Profit</option>--}}
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-xl-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Image</label>
                                    <input type="file" class="form-control form-control-file" id="example-email-input" name="image" >
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Price</label>
                                    <input type="text" class="form-control" id="example-email-input" name="price" >
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
