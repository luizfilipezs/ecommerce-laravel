@extends('layouts.app')

@section('title', 'Blog')

@section('content')
  <div class="heading-box">
    <h1 class="heading-1">Blog Wnunes</h1>
    <p class="page-description">O principal portal de notícias da nossa empresa</p>
  </div>
  <img src="{{ asset('img/Blog-post-cuate.svg') }}" alt="Ilustração da tela de um computador com a página de um blog aberta, de onde uma imagem está sendo reposicionada por uma mulher e um homem" class="blog-illustration">

  <div class="blog-advantages-wrapper">
    <div class="blog-advantage">
      <img src="{{ asset('img/badge.svg') }}" alt="Ilustração de medalha" class="blog-advantage-illustration">
      <p class="blog-advantage-text">Conheça melhor a nossa empresa e o ramo em que atuamos</p>
    </div>
    <div class="blog-advantage">
      <img src="{{ asset('img/speaker.svg') }}" alt="Ilustração de autofalante" class="blog-advantage-illustration">
      <p class="blog-advantage-text">Fique por dentro de novidades e anúncios importantes</p>
    </div>
  </div>

  <h2 class="blog-section-name">Mais recentes</h2>
  <div class="articles-wrapper">
    @foreach ($artigos as $artigo)
      <div class="article-wrapper" clickAndGo="{{ route('artigo', ['id' => $artigo->id], false) }}">
        <img src="{{ $artigo->imagem_capa }}" alt="{{ $artigo->titulo }}" class="article-cover">
        <h3 class="article-title">{{ $artigo->titulo }}</h3>
        <p class="article-description">{{ $artigo->descricao }}</p>
      </div>
    @endforeach
  </div>
@endsection