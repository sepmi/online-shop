@component('mail::message')
# Introduction
<h1>hello admin {{ $admin->fname }} {{ $admin->lname }}</h1>

new user({{ $user->fname }} {{ $user->lname }}) has been registered</h5>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
