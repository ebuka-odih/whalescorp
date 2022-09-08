@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        All Collections
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">

                </div>
                <div class="block-content">
                    <a href="{{ route('admin.collectable.create') }}" class="btn btn-primary m-3">Add Collection</a>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">
                                    <i class="far fa-user"></i>
                                </th>
                                <th>Name</th>
                                <th style="width: 15%;">Network</th>
                                <th style="width: 15%;">Price</th>
                                <th style="width: 15%;">Image</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($collections as $item)
                                <tr>
                                <td class="text-center">
                                    {{ $item->user->name }}
                                </td>
                                <td class="fw-semibold">
                                    <a >{{ $item->name }}</a>
                                </td>
                                <td>{{ $item->network }}</td>
                                <td>
                                    {{ $item->price }}
                                </td>
                                <td>
                                    <img height="70" width="70" src="{{ asset('collections/'.$item->image) }}" alt="">
                                </td>
                                <td class="text-center">
                                    <form method="POST" action="{!! route('admin.collectable.destroy', $item->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                            </button>

                                        </div>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Full Table -->

        </div>

    </main>

@endsection
