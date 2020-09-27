<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wnunes | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <main>
      <header id="header">
        <img clickAndGo="{{ url('/') }}" id="header-logo" src="{{ asset('img/logo.png') }}" alt="Logo da empresa Weingartner & Nunes">
        <ul id="main-menu">
          <li class="main-menu-item"><a href="{{ route('sobre-nos') }}">Sobre nós</a></li>
          <li class="main-menu-item"><a href="#">Contato</a></li>
          <li class="main-menu-item"><a href="#">Catálogo</a></li>
          <li class="main-menu-item"><a href="#">Meu carrinho</a></li>
          @auth
            <li class="main-menu-item highlighted-item" clickAndGo="#">Bem-vindo</li>
          @else
            <li class="main-menu-item highlighted-item" clickAndGo="#">Entrar</li>
          @endif
        </ul>
      </header>
      @yield('content')
      <footer id="footer"></footer>
    </main>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>