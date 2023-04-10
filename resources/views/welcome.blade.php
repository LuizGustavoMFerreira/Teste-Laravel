@extends('layout.main')

@section('title', 'Criar Noticia')

@section('content')

<h1 id="titulo">Noticias criadas</h1>


    <div class="events-container" class="col-md-12">
        <div id="cards-container" class="row">
        @foreach($noticias as $noticia)
            <div class="card col-md-3">
                <img src="img/noticias/{{ $noticia->image }}" alt="{{ $noticia->title }}">
                <div class="card-body">
                    <h4 class="card-title"> <strong>Título da matéria</strong> <br /> {{ $noticia->title }}</h4>
                    <h4 class="card-nome"> <strong>Nome do autor da matéria</strong><br /> {{ $noticia->nome }}</h4>
                    <h4 class="card-description"> <strong>Texto sobre a matéria</strong> <br /></h4> <h5 id="descricao">{{ $noticia->description }}</h5>
                    <a href="/noticias/information/{{ $noticia->id }}" class="btn btn-info">Saber mais</a>
                    <a href="/noticias/edit/{{ $noticia->id }}" class="btn btn-success">Editar</a>
                    <form action="/noticias/{{ $noticia->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Deletar</button>
                    </form>
                    <button type="button" class="btn btn-danger" id="like">Curti</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $.get("#like").click(function(){
                alert($($this))
            })
        });
    </script>

@endsection