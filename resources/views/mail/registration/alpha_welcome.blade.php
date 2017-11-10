@component('mail::message')
# Hello {{ $name }}!

Welcome to cfox! Before you can start, your account needs to be activated by an admin. You will get an additional email after the activation.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
