@extends('layout.main')

@section('title', 'Criar Noticia')

@section('content')

    <div class="col-md-10 offser-md-1">
        <div class="row">

            <div id="image-container" class="col-md-6">
                <img src="/img/noticias/{{ $noticias->image }}" class="img fluid" alt="{{ $noticias->title }}" id="saber-mais">               
            </div>

            <div id="info-container" class="col-md-6" id="metade">
                <h1> <strong>Data de quando a notícia foi criada</strong> <br />  {{ $noticias->created_at->format('d-m-Y') }}</h1>
                <h1> <strong>Titulo da matéria</strong> <br /> {{ $noticias->title }}</h1>
                <h1> <strong>Autor da matéria</strong> <br /> {{ $noticias->nome }}</h1>
                <h3 class="description"><strong>Texto sobre a matéria</strong> <br /> {{ $noticias->description }}</h3>  
            </div>
        </div>
    </div>

@endsection