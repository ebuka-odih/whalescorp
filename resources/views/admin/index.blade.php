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
                    Welcome, Admin
                </p>
            </div>

        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-users fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">{{ $total_users }}</div>
                        <div class="text-muted mb-3">Registered Users</div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">$@convert($deposits)</div>
                        <div class="text-muted mb-3">Total Deposits</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-chart-line fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">$@convert($withdrawal)</div>
                        <div class="text-muted mb-3">Total Withdrawal</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-wallet fa-lg text-primary"></i>
                        </div>
{{--                        <div class="fs-1 fw-bold">$@convert($investment)</div>--}}
                        <div class="text-muted mb-3">Total Investment</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overview -->


        <!-- Latest Orders + Stats -->
        <div class="row">
            <div class="col-md-12">
                <!--  Latest Orders -->
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Latest Users
                        </h3>

                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                            <thead>
                            <tr class="text-uppercase">
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Joined at</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Balance</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                            <tr>
                                <td>
                                    <span class="fw-semibold">{{ $item->fullname() }}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">{{ date('M Y d', strtotime($item->created_at )) }}</span>
                                </td>
                                <td>
                                    <span class="fw-semibold ">{!! $item->status() !!}</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $@convert(auth()->user()->balance)
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="{{ route('admin.userDetails', $item->id) }}">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                        <a class="fw-medium" href="{{ route('admin.users')}}">
                            View Users
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <!-- END Latest Orders -->
            </div>
        </div>
        <!-- END Latest Orders + Stats -->
    </div>
    <!-- END Page Content -->
</main>

@endsection

