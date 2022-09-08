@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.png') }}"/></a>
        @endcomponent
    @endslot
# Hello Admin

A new deposit alert

<p>Name: {{ $deposit->user->fullname() }}</p>
<p>Deposit Amount: {{ $deposit->amount }}</p>
<p>Deposit Method: {{ $deposit->payment_method->name }}</p>

Login your dashboard for verification

Thanks,<br>
{{ config('app.name') }}
@endcomponent
