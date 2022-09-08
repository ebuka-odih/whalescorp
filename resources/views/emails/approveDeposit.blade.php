@component('mail::message')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a style="margin: 0px" href="{{ route('index') }}"><img class="logo"  src="{{ asset('img/logo.png') }}"/></a>
        @endcomponent
    @endslot
# Dear {{ $deposit->user['name'] }}

Your deposit sum of {{ $deposit->amount }} has been approved
<br>
Login your dashboard for more details.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
