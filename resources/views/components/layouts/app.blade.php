<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'online-shop'}}</title>

    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href="css/master.css">
    {{$css ?? ''}}
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    --></head>
<body>
    <div class="container">
        <div class="alert alert-success mt-5" role="alert">
            Boostrap 5 is working!
        </div>    
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="h1">Catetories</th>
                <th class="h1">Actions</th>
            </tr>
        </thead> 
    </table>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</html>