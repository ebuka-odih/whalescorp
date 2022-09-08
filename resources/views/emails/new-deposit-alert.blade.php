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
## Hello {{ $data['deposit']->user->name  }}

<p>Your deposit order has been placed and is now being waiting for payment. Your deposit details are shown below for your reference:
</p>

<table class="table table-striped" >
    <tr>
        <th>Payment Reference:</th>
        <td>{{ $data['deposit']->transId() }}</td>
    </tr>
    <tr>
        <th>Payment Amount:</th>
        <td>@convert($data['deposit']->amount) USD</td>
    </tr>
    <tr>
        <th>Payment Method:</th>
        <td>Crypto Wallet</td>
    </tr>
    <tr>
        <th>Amount To Credit:</th>
        <td>@convert($data['deposit']->amount) USD</td>
    </tr>
</table>
<p>Please send the amount of @convert($data['deposit']->amount) USD to the bank account as below:</p>
<table class="table" >
    <tr>
        <th>Payment Reference:</th>
        <td>{{ $data['deposit']->transId() }}</td>
    </tr>
    <tr>
        <th>Account Name:</th>
        <td>{{ $data['payment_method']->acct_name ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Account Number:</th>
        <td>{{ $data['payment_method']->acct_name ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Account Address:</th>
        <td>{{ $data['payment_method']->acct_address ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Bank Name:</th>
        <td>{{ $data['payment_method']->bank_name ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Bank Branch:</th>
        <td>{{ $data['payment_method']->bank_branch ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Bank Address:</th>
        <td>{{ $data['payment_method']->bank_address ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Routing:</th>
        <td>{{ $data['payment_method']->routing_number ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Routing:</th>
        <td>{{ $data['payment_method']->routing_number ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Iban:</th>
        <td>{{ $data['payment_method']->iban_code ? : "Contact Support" }}</td>
    </tr>
    <tr>
        <th>Swift:</th>
        <td>{{ $data['payment_method']->swift_code ? : "Contact Support" }}</td>
    </tr>
</table>
    <p>Please Note: Make your payment within 3 days, unless this order will be cancelled.</p>
    <p>Your funds will add into your account as soon as we have confirmed the payment.</p>
    <p>Feel free to contact us if you have any questions.</p>

@endcomponent
