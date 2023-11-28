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
            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topics[]">

            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topics[]">

            <label for="topics">Topic:</label>
            <input type="text" class="form-control" name="topics[]">
        </div>

        <div class="form-group">
            <label for="date">Data de noticia:</label>
            <input type="date" name="date" id="date" class="form-control">
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
    
