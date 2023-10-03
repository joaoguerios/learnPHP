<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SG</title>
    <link rel="shortcut icon" href="{{asset('imgs/gestao.jpg')}}">
</head>

<body>
    @include('site.layouts.menu')
    <div class="container principal">
        <div class="right">
            <h3>para duvidas favor entrar em contato por meio deste formulario</h3>
            @component('site.layouts.form') @endcomponent
        </div>
    </div>
    @include('site.layouts.footer')
</body>

</html>