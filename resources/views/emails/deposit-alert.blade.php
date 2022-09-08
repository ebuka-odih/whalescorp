@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.png') }}"/></a>
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
## Hello {{ $deposit->user->fullname() }}

<p>Your deposit order has been placed and is now being waiting for payment. Your deposit details are shown below for your reference:
</p>
<table class="table table-striped" >
    <tr>
        <th>Payment Reference:</th>
        <td>{{ $deposit->transId() }}</td>
    </tr>
    <tr>
        <th>Payment Amount:</th>
        <td>@convert($deposit->amount) USD</td>
    </tr>
    <tr>
        <th>Payment Method:</th>
        <td>Crypto Deposit</td>
    </tr>
    <tr>
        <th>Amount To Credit:</th>
        <td>@convert($deposit->amount) USD</td>
    </tr>
</table>
<p>If you have not made the payment yet, please send the amount of @convert($deposit->amount) USD to the following Bitcoin address:</p>

<p>Wallet Name: {{ $deposit->payment_method->name }}</p>
<p>Wallet Address: {{ $deposit->payment_method->value }}</p>
<br>
<p>Your funds will add into your account as soon as we have confirmed the payment.</p>
<p>Feel free to contact us if you have any questions.</p>
@endcomponent
