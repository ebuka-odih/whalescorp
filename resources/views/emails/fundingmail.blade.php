@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.PNG') }}"/></a>
        @endcomponent
    @endslot

<style>
    table, th, td {
        /*border: 1px solid black;*/
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
# Hello {{ $data->user->name }}

<p>Your account has been created with the sum of ${{ $data->amount }}</p>

<table class="table table-striped" >
    <tr>
        <th>Date:</th>
        <td>{{ date('Y M d', strtotime($data->created_at)) }}</td>
    </tr>
    <tr>
        <th>Amount:</th>
        <td>{{ $data->amount }}</td>
    </tr>
    <tr>
        <th>Funding Type:</th>
        <td>{{ $data->fund_type() }}</td>
    </tr>

</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
