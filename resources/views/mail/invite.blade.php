@component('mail::message')
# Hello!

You have been invited to test the cfox pre-alpha! Register now!

@component('mail::button', ['url' => route('register')])
Register
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
