@extends('layouts.app')

@section('title', 'Sobre nós')

@section('content')
  <h1 class="page-title">Sobre nós</h1>
  <p class="opening-page-paragraph">Conheça mais sobre nossa missão, visão e política de qualidade e entenda como trabalhamos para entregar o melhor para você e sua empresa.</p>

  <div class="about-us-box">
    <img src="{{ asset('img/In progress-bro (filled).svg') }}" alt="Ilustração de uma mulher escalando engrenagens, simbolizando seu desejo de atingir metas" class="about-us-illustration">
    <h2 class="about-us-topic">Missão</h2>
    <p class="about-us-text">Desenvolvemos processos metalúrgicos com responsabilidade, integridade e autenticidade perante nossos clientes, visando fabricar produtos com qualidade e prazos desejados.</p>
    <p class="about-us-text">Buscamos a capacitação e motivação dos nossos colaboradores para que possam trabalhar numa empresa comprometida e empenhada com o bem estar e desenvolvimento de todos.</p>
    <p class="about-us-text">Nossos fornecedores são nossos parceiros, por isso temos o respeito mútuo para que possamos ser bem atendidos para que possamos atender bem aos nossos clientes.</p>
  </div>
  <div class="about-us-box">
    <img src="{{ asset('img/Creativity-amico.svg') }}" alt="Ilustração de mulher com um lápis na mão e pintando o que seriam ideias" class="about-us-illustration">
    <h2 class="about-us-topic">Visão</h2>
    <p class="about-us-text">Ser a melhor empresa no ramo metalúrgico no mercado de infraestrutura em telecomunicações, tendo princípios morais e comprometimento com a satisfação de nossos clientes, colaboradores e parceiros.</p>
    <p class="about-us-text">Promovendo oportunidades de trabalho para a sociedade e alternativas de projetos exequíveis que nossos clientes necessitam, superando nossas metas de novos trabalhos.</p>
  </div>
  <div class="about-us-box">
    <img src="{{ asset('img/QA engineers-pana.svg') }}" alt="Ilustração de dois técnicos avaliando o controle de qualidade" class="about-us-illustration">
    <h2 class="about-us-topic">Política de qualidade</h2>
    <p class="about-us-text">Renovação e melhoria permanente para atender as necessidades específicas de cada cliente, oferecendo produtos confiáveis e preços competitivos, para tal, buscamos uma relação saudável e pro-ativa com nossos clientes, colaboradores e fornecedores.</p>
  </div>
  <div class="about-us-box">
    <img src="{{ asset('img/Post-box.svg') }}" alt="Imagem de caixa de correio por onde entram e saem aviões de papel" class="about-us-illustration">
    <h2 class="about-us-topic">Nosso blog</h2>
    <p class="about-us-text">Para ficar a par de todas as novidades da Wnunes, como novos produtos, grandes promoções, dias especiais para nós e até projetos futuros, fique atento a nosso blog - é lá que postamos todo esse conteúdo imperdível. Confira!</p>
    <p class="about-us-text"><a href="{{ route('blog') }}" class="inner-link">Ver blog</a></p>
  </div>
  <div class="about-us-box">
    <img src="{{ asset('img/Video tutorial-amico.svg') }}" alt="Ilustração de mulher falando através de um vídeo na tela de um computador" class="about-us-illustration">
    <h2 class="about-us-topic">Vídeos</h2>
    <p class="about-us-text">Ainda deseja conhecer mais sobre a Wnunes? Nossos sócios anunciam novidades e explicam melhor a trajetória da empresa através de alguns vídeos feitos com muito carinho para você.</p>
    <p class="about-us-text"><a href="{{ route('videos') }}" class="inner-link">Assistir a vídeos</a></p>
  </div>
@endsection