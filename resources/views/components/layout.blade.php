<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('./img/ico.svg')}}">
    <title>Home | {{$title}}</title>
    @vite([
    'resources/sass/app.scss',
    'resources/js/app.js',])
</head>

<body onload="alerta()">
    <main class="main position-relative">
        {{$slot}}
        @if($errors->any())
        <ul class="alert alert-danger position-absolute top-0 w-100 rounded-0">
            @foreach($errors->all() as $error)
            <p class="m-0">{{$error}}</p>
            @endforeach
        </ul>
        @endif
        <x-loader></x-loader>

    </main>


</body>


</html>