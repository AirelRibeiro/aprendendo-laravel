@extends('app')

@section('title', 'Palavras')

@section('content')
<h1>Lista de Palavras</h1>
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Palavra</th>
      <th scope="col">Significado</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($words as $word)
    <tr>
      <th scope="row">{{ $word->id }}</th>
      <td>{{ $word->word }}</td>
      <td>{{ $word->meaning }}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('words.show', $word) }}">Ver detalhes</a>
        <form action="#" method="POST" style="display: inline;">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-grid gap-2 col-6 mx-auto">
  <a class="btn btn-success" href="#">Incluir nova palavra</a>
</div>
@endsection