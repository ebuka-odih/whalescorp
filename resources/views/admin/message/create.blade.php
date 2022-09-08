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
                    <form action="{{ route('admin.sendMessage') }}" method="POST" >
                        <!-- Basic Elements -->
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('update'))
                            <div class="alert alert-success">
                                {{ session()->get('update') }}
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
                                    <label class="form-label" for="example-email-input">Amount</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
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

        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Date</th>
                            <th>User </th>
                            <th>Message </th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    {{ date('d M, Y', strtotime( $item->created_at)) }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->user->name }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->message }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.editMessage', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form method="POST" action="{!! route('admin.subscription.destroy', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete subscription?&quot;)">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </div>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Striped Table -->

        </div>
    </main>

@endsection
