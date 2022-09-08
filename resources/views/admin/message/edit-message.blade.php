@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Send Messages
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
                    <form action="{{ route('admin.updateMessage', $message->id) }}" method="POST" >
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
                            <div class="col-lg-6 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Select User</label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Message</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message', optional($message)->message) }}</textarea>
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
