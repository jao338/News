<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <header class="header navbar navbar-expand-lg">
      <nav class="container">
          
          <a href="/" class="navbar-brand"><img src="/img/logo.png" width="80" height="80" alt=""></a>  
          
          <form action="/" method="GET" class="d-flex navbar-brand">
            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
            <button type="submit" name="btn-search" class="btn-search rounded-circle btn btn-light">

              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>

            </button>
          </form>

          <ul class="navbar-brand d-flex align-items-center justify-content-center list-header">

            <li>
              <a href="#">Política</a>
            </li>
            
            <li>
              <a href="#">Economia</a>
            </li>

            <li>
              <a href="#">Esportes</a>
            </li>

            <li>
              <a href="#">Mais vistos</a>
            </li>
          </ul>

          @auth

            <div class="d-flex align-item-center navbar-brand">
              <a href="/dashboard" class="btn btn-light mR-16" style="color: black">Meu perfil</a>

              <form action="/logout" method="POST">
                @csrf
                <a href="/logout" class="btn btn-outline-light" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
              </form>
            </div>
          @endauth

          @guest
          <div class="navbar-brand links-header">
            <a href="/login" class="btn btn-light mR-16" style="color:black">Login</a>
            <a href="/register" class="btn btn-outline-light" style="color:white">Cadastro</a>
          </div>
          @endguest

        </nav>
    </header>

    <section class="container-fluid content">
      <div class="container">
        @yield('content')
      </div>
    </section>

    <footer class="container-fluid paddingLR-0">
      <div class="footer d-flex justify-content-center align-items-center">
          <h4 style="color: white;">Choquei news</h4>     
      </div>
    </footer>

</body>
</html>