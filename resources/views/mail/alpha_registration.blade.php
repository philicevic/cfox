@component('mail::message')
# Hello!

A new user has registered for cfox. Go and check if you want to verify him!

User: {{ $user->name }}

E-Mail: {{ $user->email }}

@component('mail::button', ['url' => $url, 'color' => 'blue'])
View User
@endcomponent

@component('mail::panel')
    This user will not be able to login until he gets activated by an admin.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
