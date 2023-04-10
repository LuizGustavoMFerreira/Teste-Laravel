@extends('layout.main')

@section('title', 'Editando: ' . $noticias->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $noticias->title }}</h1>

        <form action="/noticias/update/{{ $noticias->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')   
            <div class="form-group">
                <label for="Titulo">Titulo:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Digite um novo título da matéria" required>
            </div>

            <div class="form-group">
                <label for="Texto">Texto:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Digite um novo texto da matéria" required></textarea>
            </div>

            <div class="form-group">
                <label for="Autor">Autor:</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite um novo autor da matéria" required>
            </div>

            <div class="form-group">
                <label for="Imagem">Imagem da noticia:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>

            <input type="submit" class="btn btn-primary" value="Editar noticia" id="botao">
        </form>
    </div>

@endsection