<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'online-shop'}}</title>

    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    {{$css ?? ''}}
    </head>
<body>
    <div class="container-fluid">
        <x-layouts.header>
        </x-layouts.header>
        <div>
            
        </div>  
    </div>
    
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</html>