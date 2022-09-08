@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Investment Package</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">

                <div class="block-content">
                    <form action="{{ route('admin.subscription.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">
                            <div class="col-lg-8 offset-lg-2">

                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="name" >
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-email-input">Term Days</label>
                                        <input type="number" class="form-control" id="example-email-input" name="term_days" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-password-input">Total Return</label>
                                        <input type="text" class="form-control" id="example-password-input" name="total_return" >
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-password-input">Min Amount</label>
                                        <input type="number" class="form-control" id="example-password-input" name="amount" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-secondary">Save</button>

                            </div>

                        </div>
                </div>

                <!-- END Basic Elements -->

                </form>
            </div>
        </div>
        <!-- END Elements -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Name</th>
                            <th>Term Days </th>
                            <th>Total Return </th>
                            <th>Amount</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    {{ $item->name }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->term_days }} Day(s)
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->total_return }}%
                                </td>
                                <td class="fw-semibold">
                                    ${{ $item->amount }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.subscription.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
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
        <!-- END Page Content -->

        <!-- END Page Content -->
    </main>

@endsection
