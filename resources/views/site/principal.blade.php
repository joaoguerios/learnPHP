<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('site.layouts.menu')
    <div class="container principal">
        <div class="left">
            <h3>Sistema de super gestao</h3>
            <img src="{{asset('imgs/gestao.jpg')}}" alt="gestao">
        </div>
        <div class="right">
            <p>para duvidas favor entrar em contato por meio deste formulario</p>
            @component('site.layouts.form') @endcomponent
        </div>
    </div>
    @include('site.layouts.footer')
</body>

</html>
{{-- <ul>
    <li><a href="{{ route ('site.principal') }}">principal</a></li>
    <li><a href="{{ route ('site.contatos') }}">contatos</a></li>
    <li><a href="{{ route ('site.sobrenos') }}">sobrenos</a></li>
    <li><a href="{{ route ('site.login') }}">login</a></li>
    <li><a href="{{ route ('store.clientes') }}">cliente</a></li>
    <li><a href="{{ route ('store.fornecedores') }}">fornecedores</a></li>
    <li><a href="{{ route ('store.produtos') }}">produtos</a></li>
</ul> --}}