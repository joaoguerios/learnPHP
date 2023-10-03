<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SG</title>
    <link rel="shortcut icon" href="{{asset('imgs/gestao.jpg')}}">
</head>
<body>
    @include('site.layouts.menu')
    <div class="resposta">
        <h2>Obrigado pelo contato {{old('name')}}<br>Entraremos em contato em breve!</h2>
    </div>
    @include('site.layouts.footer')
</body>
</html>