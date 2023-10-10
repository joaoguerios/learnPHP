<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SG</title>
    <link rel="shortcut icon" href="{{asset('imgs/gestao.jpg')}}">
</head>

<body>
    @include('store.layouts.menu')
    <div class="container principal">
        <div class="form">
            <h1>teste pesquisa</h1>
        </div>
    </div>
    @include('store.layouts.footer')
</body>

</html>