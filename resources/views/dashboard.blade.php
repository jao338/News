@extends('layouts/main')

@section('title', 'Choquei News - Dashboard')

@section('content')

    @if (isset($notices) && count($notices) == 0)

        <p>Nenhuma notícia foi encontrada, <a href="/news/create" class="text-decoration-none">criar notícia</a></p>
    
    @else

        <h2>Minhas noticias</h2>
        
        @foreach ($notices as $item)

            @php
                $topics = json_decode($item->topic, TRUE);
            @endphp
            
            <div class="row mB-32">
                <div class="col-md-2">
                    <a href="/news/{{$item->id}}" class="text-decoration-none" style="font-size: 18pt; font-weight: bold; color: #C4170C"><img src="/img/news/{{$item->img}}" class="w-100" style="border-radius: 16px;" alt=""></a>                
                </div>
                <div class="d-flex flex-column justify-content-center col-md-10 pL-16">
                    <a href="/news/{{$item->id}}" class="text-decoration-none" style=";font-size: 18pt; font-weight: bold; color: #C4170C">{{ $item->title }}</a>
                    <a href="/news/{{$item->id}}" class="text-decoration-none w-100">{{ $topics[0] }}</a>
                </div>
            </div>
            
        @endforeach
        
    @endif

@endsection