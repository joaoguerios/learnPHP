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
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="{{ route ('site.principal') }}" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="{{ route ('site.contatos') }}" class="nav-link px-2 text-white">Contatos</a></li>
              <li><a href="{{ route ('site.sobrenos') }}" class="nav-link px-2 text-white">Sobre-nos</a></li>
            </ul>
          </div>
        </div>
      </header>
<div class="container principal">
    <div class="right">
        <p>para duvidas favor entrar em contato por meio deste formulario</p>
        <form>
            <div class="form-group">
              <label for="name">nome </label>
              <input type="text" class="form-control" id="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="cellphone">telefone</label>
                <input type="text" class="form-control" id="cellphone" placeholder="telefone">
            </div>
            <div class="form-group">
                <label for="reason">Motivo</label>
                <input type="text" class="form-control" id="reason" placeholder="qual o motivo do contato">
            </div>
            <button class="btn btn-dark rounded-pill px-3" type="submit">Submit</button>
          </form>
    </div>
</div>
  <footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
      <span class="text-body-secondary"><div class="container" id="footerfu">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="{{ route ('site.principal') }}" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="{{ route ('site.contatos') }}" class="nav-link px-2 text-body-secondary">Contatos</a></li>
            <li class="nav-item"><a href="{{ route ('site.sobrenos') }}" class="nav-link px-2 text-body-secondary">Sobre-nos</a></li>
          </ul>
        </footer>
      </div>
    </span>
    </div>
</body>
</html>
