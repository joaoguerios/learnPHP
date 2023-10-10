<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <title>SG</title>
    <link rel="shortcut icon" href="{{asset('imgs/gestao.jpg')}}">
</head>

<body>
    @include('store.layouts.menu')
    <div class="title">
        <h2>Fornecedores - Pesquisa</h2>
    </div>
    <div class="principal">
        <div class="form">
            <form action="{{route('store.fornecedores.pesquisa')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">nome </label>
                    <input type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="Nome" name="name">
                    @if($errors->has('name'))<p class="erro">{{$errors->first('name')}}</p> @endif
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" value="{{old('email')}}" class="form-control" id="email" placeholder="Email" name="email">
                    @if($errors->has('email'))<p class="erro">{{$errors->first('email')}}</p> @endif
                </div>
                <div class="form-group">
                    <label for="Site">Site</label>
                    <input type="text" value="{{old('Site')}}" class="form-control" id="Site" placeholder="Site" name="Site">
                    @if($errors->has('Site'))<p class="erro">{{$errors->first('Site')}}</p> @endif
                </div>
                <div class="form-group">
                    <label for="UF">UF</label>
                    <input type="text" value="{{old('UF')}}" class="form-control" id="UF" placeholder="UF" name="UF">
                    @if($errors->has('UF'))<p class="erro">{{$errors->first('UF')}}</p> @endif
                </div>
                <button class="btn btn-dark rounded-pill px-3" type="submit">Pesquisar</button>
            </form>
                <a href="{{route('store.fornecedores.criar')}}"><button class="btn btn-dark rounded-pill px-3" type="button">Cadastrar novo fornecedor</button></a>
        </div>
    </div>
    @include('store.layouts.footer')
</body>

</html>