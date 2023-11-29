@extends('layouts/main')

@section('title', "Editar notícia")

@section('content')

    <form action="/news/{{ $notice->id }}" method="POST" class="form-create-new" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
        
        <h1>Editar notícia</h1>

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $notice->title }}">
        </div>

        <div class="form-group">
            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topic[]" value="{{ json_decode($notice->topic, TRUE)[0] }}">

            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topic[]" value="{{ json_decode($notice->topic, TRUE)[1] }}">

            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topic[]" value="{{ json_decode($notice->topic, TRUE)[2] }}">
        </div>

        <div class="form-group">
            <label for="date">Data de noticia:</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $notice->date->format('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label for="img">Imagem da Noticia:</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>

        <div class="themes form-group">

            <p class="m-0 p-0" style="font-weight: bold">Temas:</p>
            <input type="checkbox" name="themes[]" value="Politica" style="margin-left: 0 !important"> Política
            <input type="checkbox" name="themes[]" value="Economia"> Economia
            <input type="checkbox" name="themes[]" value="Tecnologia"> Tecnologia
            <input type="checkbox" name="themes[]" value="Esportes"> Esportes
            <input type="checkbox" name="themes[]" value="Meio ambiente"> Meio ambiente
            <input type="checkbox" name="themes[]" value="Saude"> Saúde
            <input type="checkbox" name="themes[]" value="Educação"> Educação
            
        </div>

        <div class="d-flex justify-content-end mT-16">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>
@endsection