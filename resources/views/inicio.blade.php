@extends('layouts.app')

@section('title', 'Início')

@section('content')
  <div class="wrapper-aparted" id="first-box">
    <div id="initial-text">
      <h1 class="main-title">Energia solar</h1>
      <h2 class="main-subtitle">Você pode fazer a diferença e economizar com isso</h2>
      <p class="main-paragraph">A Wnunes é especializada em desenvolver painéis solares que ajudam a cuidar de seu lar e a salvar o meio ambiente</p>
      <div class="see-more-button-wrapper">
        <div class="see-more-button" clickAndGo="">
          <p class="see-more-text"><a href="">Ver catálogo</a></p>
        </div>
        <div class="background-blur"></div>
      </div>
    </div>
    <img id="initial-illustration" src="{{ asset('img/World-bro.svg') }}" alt="Ilustração de uma garota abraçando o mundo enquanto sorri docilmente">
  </div>

  <div class="wrapper-aparted" id="presenting-video-wrapper">
    <iframe id="youtube-video" src="https://www.youtube.com/embed/Sajt1RNYspk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="presenting-video-texts">
      <h2 class="presenting-title">Inovando há mais de duas décadas.</h2>
      <p class="presenting-paragraph">“Fundada em 1995 pelos sócios Arlito Weingartner e João Batista Perez Nunes, a Weingartner & Nunes atua na área de projetos, fabricação e montagens de estruturas metálicas, principalmente para as áreas de telecomunicações e energias renováveis.”</p>
    </div>
  </div>

  <h2 class="home-section-title">Compre conosco e...</h2>

  <div class="advantages-wrapper">
    <div class="advantage-box">
      <img src="{{ asset('img/Savings-bro.svg') }}" alt="Ilustração de uma mão colocando dinheiro em um cofre de porquinho" class="advantage-illustration">
      <h3 class="advantage-title">Poupe seu<br>dinheiro</h3>
      <p class="advantage-text">Economize até 90% na conta de luz e na manutenibilidade</p>
    </div>
    <div class="advantage-box">
      <img src="{{ asset('img/Alone-amico.svg') }}" alt="Ilustração de um jovem no topo de um monte admirando a paisagem natural" class="advantage-illustration">
      <h3 class="advantage-title">Faça do mundo<br>um lugar melhor</h3>
      <p class="advantage-text">Uma alternativa que ajuda a manter mais áreas verdes </p>
    </div>
    <div class="advantage-box">
      <img src="{{ asset('img/Finance-amico.svg') }}" alt="Ilustração de dinheiro, gráfico e finanças" class="advantage-illustration">
      <h3 class="advantage-title">Valorize seu<br>imóvel</h3>
      <p class="advantage-text">Além de ocupar pouco espaço, traz mais valor ao seu lar</p>
    </div>
    <div class="advantage-box">
      <img src="{{ asset('img/Delivery-bro.svg') }}" alt="Ilustração de um entregador com uma caixa em mãos e de um relógio ao seu lado, simbolizando a pressa para realizar seu serviço" class="advantage-illustration">
      <h3 class="advantage-title">Receba seu produto<br>rapidamente</h3>
      <p class="advantage-text">Entregamos suas compras com agilidade</p>
    </div>
  </div>

  <h2 class="home-section-title">Nossos clientes</h2>

  <div id="customers-slider">
    <div class="customer-box">
      <img src="{{ asset('img/clientes/copel.png') }}" alt="Copel" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/edp.png') }}" alt="edp" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/embratel.png') }}" alt="Embratel" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/cemig.png') }}" alt="Cemig" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/shell.png') }}" alt="Shell" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/vivo.png') }}" alt="Vivo" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/claro.png') }}" alt="Claro" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/oi.png') }}" alt="Oi" class="customer-logo">
    </div>
    <div class="customer-box">
      <img src="{{ asset('img/clientes/tim.png') }}" alt="Tim" class="customer-logo">
    </div>
  </div>

  <div class="slider-controllers-wrapper">
    <div class="slider-btn-controller"></div>
    <div class="slider-btn-controller active-slider-controller"></div>
    <div class="slider-btn-controller"></div>
  </div>

  <div class="last-suggestions-wrapper">
    <div class="suggestion-box" clickAndGo="{{ route('sobre-nos') }}">
      <p class="suggestion-text"><a href="{{ route('sobre-nos') }}">Conheça melhor a nossa empresa</a></p>
      <img src="{{ asset('img/In progress-bro.svg') }}" alt="Ilustração de uma mulher escalando engrenagens, simbolizando seu desejo de atingir metas" class="suggestion-illustration">
    </div>
    <div class="suggestion-box" clickAndGo="">
      <p class="suggestion-text"><a href="">Confira o nosso catálogo</a></p>
      <img src="{{ asset('img/Catalogue-rafiki.svg') }}" alt="Ilustração de uma mulher e um homem mostrando um catálogo aberto" class="suggestion-illustration">
    </div>
  </div>
@endsection