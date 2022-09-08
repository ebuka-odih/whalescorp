@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Users</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4>Users</h4>
                </div>
                <div class="block-content">
                   <div class="table-responsive">
                       <table class="table table-striped table-vcenter">
                           <thead>
                           <tr>
                               <th class="text-center" style="width: 50px;">#</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                               <th class="d-none d-sm-table-cell" style="width: 15%;">Joined At</th>
                               <th class="text-center" style="width: 100px;">Actions</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($users as $index => $item)
                               <tr>
                                   <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                   <td class="fw-semibold">
                                       {{ $item->name }} ($@convert($item->balance))
                                   </td>
                                   <td class="fw-semibold">
                                       {{ $item->email }}
                                   </td>
                                   <td class="d-none d-sm-table-cell">
                                       {!! $item->status() !!}
                                   </td>
                                   <td class="d-none d-sm-table-cell">
                                       {{ date('Y-m-d', strtotime($item->created_at)) }}
                                   </td>
                                   <td class="text-center">
                                       <div class="btn-group">
                                           <a href="{{ route('admin.userDetails', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                               <i class="fa fa-eye"></i>
                                           </a>

                                           <form method="POST" action="{!! route('admin.deleteUser', $item->id) !!}" accept-charset="UTF-8">
                                               <input name="_method" value="DELETE" type="hidden">
                                               {{ csrf_field() }}

                                               <div class="btn-group btn-group-xs pull-right" role="group">
                                                   <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Package?&quot;)">
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
                    <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
            <!-- END Striped Table -->

        </div>
        <!-- END Page Content -->
    </main>

@endsection
