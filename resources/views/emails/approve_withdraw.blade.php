@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.png') }}"/></a>
        @endcomponent
    @endslot

# Dear {{ $withdraw->user['name'] }}

You have successfully received your withdrawal from <a href="prepStation.co">PrepStation</a> to your  wallet

<p>Amount: $@convert($withdraw->amount)</p>

<p>Wallet Address: {{ $withdraw->wallet_address }}</p>

<p>Be informed that any deposit made on our VIP plan package attracts and instant bonus of $1000 instantly withdraw- able.
    <br>Please chat our live customer support for more details</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
