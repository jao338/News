@extends('layouts/main')

@section('title', 'Choquei news - Criar noticia')

@section('content')
    
    <form action="/news" method="POST" class="form-create-new">
    
        @csrf
        <h1>Nova notícia</h1>

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <div class="form-group">
            <label for="subtitle1">Subtitulo 1:</label>
            <input type="text" class="form-control" name="subtitle1" id="subtitle1">
        </div>
        
        <div class="form-group">
            <label for="subtitle2">Subtitulo 2:</label>
            <input type="text" class="form-control" name="subtitle2" id="subtitle2">
        </div>
        </div>

        <div class="form-group">
            <label for="topic1">Topico 1</label>
            <input type="text" class="form-control" name="topic1" id="topic1">
        </div>

        <div class="form-group">
            <label for="topic2">Topico 2</label>
            <input type="text" class="form-control" name="topic2" id="topic2">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>    


@endsection
    
