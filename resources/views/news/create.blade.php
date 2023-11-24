@extends('layouts/main')

@section('title', 'Choquei news - Criar noticia')

@section('content')
    
    {{-- <form action="/news" method="POST" class="form-create-new" enctype="multipart/form-data">
    
        @csrf
        <h1>Nova notícia</h1>

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="description">Conteúdo:</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>

        <div class="form-group">
            <label for="date">Data de noticia</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="img">Imagem da Noticia</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form> --}}
    
    <form action="/news" method="POST" class="form-create-new" enctype="multipart/form-data">
    
        @csrf
        <h1>Nova notícia</h1>

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="topics">Topic 1:</label>
            <input type="text" class="form-control" name="topics[]" id="topic1">

            <label for="topics">Topic 2:</label>
            <input type="text" class="form-control" name="topics[]" id="topic2">

            <label for="topics">Topic 3:</label>
            <input type="text" class="form-control" name="topics[]" id="topic3">
        </div>

        <div class="form-group">
            <label for="date">Data de noticia</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="img">Imagem da Noticia</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </form>  


@endsection
    
