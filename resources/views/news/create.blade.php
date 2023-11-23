@extends('layouts/main')

@section('title', 'Choquei news - Criar noticia')

@section('content')
    
    <form action="/news" method="POST" class="form-create-new" enctype="multipart/form-data">
    
        @csrf
        <h1>Nova notícia</h1>

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="subtitles">Conteúdo:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Data de noticia</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>    


@endsection
    
