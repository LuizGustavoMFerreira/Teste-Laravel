@extends('layout.main')

@section('title', 'Criar Noticia')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Tela de Cadastro</h1>

        <form action="/noticias" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="Titulo">Titulo:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Digite o titulo da matéria" required>
            </div>

            <div class="form-group">
                <label for="Texto">Texto:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Digite o texto da matéria" required></textarea>
            </div>

            <div class="form-group">
                <label for="Autor">Autor:</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o autor da matéria" required>
            </div>

            <div class="form-group">
                <label for="Imagem">Imagem da noticia:</label>
                <input type="file" id="image" name="image" class="form-control-file" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Criar noticia" id="botao">
        </form>
    </div>

   
@endsection