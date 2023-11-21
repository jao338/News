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
          
          <div class="d-flex navbar-brand">
            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button">Enviar</button>
          </div>

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

          <div class="navbar-brand links-header">
            <a href="/login">Login</a>
            <a href="/register">Cadastro</a>
          </div>

        </nav>
    </header>

    <section class="container-fluid content">
      @yield('content')
    </section>

    <footer class="container-fluid paddingLR-0">
      <div class="footer d-flex justify-content-center align-items-center">
          <h4 style="color: white;">Choquei news</h4>     
      </div>
    </footer>

</body>
</html>