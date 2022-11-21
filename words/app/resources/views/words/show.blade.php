@extends('app')

@section('title', 'Detalhes das palavras')

@section('content')
<div class="card">
  <h5 class="card-header">Detalhes de {{ $word->word }}</h5>
  <div class="card-body">
    <p><strong>Id: </strong> {{ $word->id }}</p>
    <p><strong>Palavra: </strong> {{ $word->word }}</p>
    <p><strong>Significado básico: </strong> {{ $word->meaning }}</p>
    <p><strong>Significado detalhado: </strong> {{ $word->description }}</p>
    <p><strong>Plicação em frase: </strong> {{ $word->aplication }}</p>
    <br>
    <a class="btn btn-primary" href="{{ route('words.edit', $word) }}">Atualizar</a>
  </div>
</div>
@endsection