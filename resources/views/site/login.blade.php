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
        <form class="formlogin" action="{{route('site.login')}}" method="post">
            @csrf
            <img class="mb-4" src="{{asset('imgs/gestao.jpg')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="usuario" name="login">
              <label for="floatingInput">usuario</label>
              @if($errors->has('login'))<p class="erro">{{$errors->first('login')}}</p> @endif
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
              <label for="floatingPassword">Senha</label>
              @if($errors->has('password'))<p class="erro">{{$errors->first('password')}}</p> @endif
            </div>
        
            <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
              <a href="{{route('site.criarConta')}}"><p>Não tenho conta</p></a>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Acessar</button>
            {{isset($erro) && $erro != '' ? $erro: ''}}
          </form>
          
    </div>
    @include('site.layouts.footer')
</body>

</html>