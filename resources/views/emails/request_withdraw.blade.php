@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.PNG') }}"/></a>
        @endcomponent
    @endslot

# Withdrawal Request

Dear {{ $data['user']->fullname() }}

<br>

<p style="font-size: 18px">A withdrawal request of {{ $data['withdraw']->amount }} USD has been sent from your account
</p>

<br>
<p style="font-size: 18px">If you did not make this payout request please contact Account Support immediately
    to verify and secure your account
</p>


<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
