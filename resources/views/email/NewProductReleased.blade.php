@component('mail::message')
# Introduction

<h3>Hi {{$user->fname}} {{$user->lname}}</h3>
<p>we released new product check it out</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
