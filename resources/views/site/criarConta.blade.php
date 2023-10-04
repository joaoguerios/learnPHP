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
    <div class="login">
        <form class="formlogin" action="{{route('site.criarConta')}}" method="post">
            @csrf
            <img class="mb-4" src="{{asset('imgs/gestao.jpg')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Criar Conta</h1>
        
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="nome" name="name">
              <label for="floatingInput">nome completo</label>
              @if($errors->has('name'))<p class="erro">{{$errors->first('name')}}</p> @endif
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="cpf" name="cpf">
                <label for="floatingInput">CPF</label>
                @if($errors->has('cpf'))<p class="erro">{{$errors->first('cpf')}}</p> @endif
              </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="email" name="email">
                <label for="floatingInput">email</label>
                @if($errors->has('email'))<p class="erro">{{$errors->first('email')}}</p> @endif
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Senha</label>
                @if($errors->has('password'))<p class="erro">{{$errors->first('password')}}</p> @endif
              </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Criar Conta</button>
          </form>
    </div>
    @include('site.layouts.footer')
</body>

</html>