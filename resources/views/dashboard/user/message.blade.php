@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper" style="min-height: 369px;">
        <!-- left content -->
        <section class="left-block content">
            <a class="mdi mdi-close mdi-menu btn btn-success open-left-block d-block d-md-none" href="javascript:void(0)"></a>
            <div class="scrollable ps-container ps-theme-default ps-active-y" style="height: 100%;" data-ps-id="84ccbb46-3729-4a27-5dfa-eb499d97c7f8">
                <div class="left-content-area">
                    <div class="h-p100">


                        <div class="box mb-0 no-shadow bg-transparent b-0">
                            <div class="box-header with-border p-20">
                                <h4 class="box-title">Message</h4>
                            </div>
                            <div class="box-body mailbox-nav p-20">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item"><a class="nav-link active" href="{{ route('user.message.index') }}"><i class="ion ion-ios-email-outline"></i> Inbox
                                            <span class="label label-success pull-right">{{ auth()->user()->messageCount() }}</span></a></li>

                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /. box -->

                        <!-- /.box -->
                    </div>
                </div>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 564px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 506px;"></div></div></div>
        </section>
        <!-- /.left content -->

        <!-- right content -->
        <section class="right-block content">

            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">MessageBox</h4>
                    <p class="subtitle">List of all messages sent by admin</p>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="mailbox-messages">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                @foreach($messages as $item)

                                <tr>
                                    <td class="mailbox-subject"><a href="{{ route('user.message.show', $item->id) }}"> - {{ $item->message }}</a>
                                    </td>
                                    <td class="mailbox-date">{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->

        </section>
        <!-- /.right content -->

    </div>

@endsection
