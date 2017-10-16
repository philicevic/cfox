@component('mail::message')
# Welcome, {{ $name }}

Welcome to cfox! Before you can start, you need to confirm your account by clicking the button below.

@component('mail::button', ['url' => $url])
Validate Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
