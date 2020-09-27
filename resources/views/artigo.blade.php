@extends('layouts.app')

@section('title', $artigo->titulo)

@section('content')
  <div class="heading-box" id="article-heading-box"></div>
  <img src="{{ $artigo->imagem_capa }}" alt="{{ $artigo->titulo }}" class="article-cover">

  <h1 class="article-title">{{ $artigo->titulo }}</h1>
  <p class="publication-date">{{ $artigo->created_at }}</p>

  <article class="article-content">
    <p>{{ $artigo->conteudo }}</p>
  </article>

  <div class="end-buttons">
    <div class="opt-btn highlighted-btn" clickAndGo="{{ route('blog') }}">
      <a href="{{ route('blog') }}">Voltar ao blog</a>
    </div>
    <div class="opt-btn">Compartilhar</div>
  </div>
@endsection