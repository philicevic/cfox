@component('mail::message')
# Hello {{ $user->name }},

your account has been verified. Now you are able to login into your dashboard! Try it out!

@component('mail::button', ['url' => $url])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
