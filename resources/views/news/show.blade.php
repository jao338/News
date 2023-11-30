@extends('layouts/main')

@section('title', "Choquei News - $notice->title")

@section('content')

    @php
        $topics = json_decode($notice->topic, TRUE);
    @endphp

    <div class="d-flex flex-column align-items-center w-100">
        <div class="d-flex justify-content-center w-100 mB-32">
            <div class="img-notice">
                <img src="/img/news/{{ $notice->img }}" class="w-100" alt="{{ $notice->title }}">
            </div>
        </div>
    
        <div class="w-75 mB-32">
    
            <h1 class="mB-16">{{ $notice->title }}</h1>
            <div class="topic1">
                <p>{{ $topics[0] }}</p>
            </div>

            <div class="d-flex flex-row justify-content-between">
                <div class="info-notice">
                    <span>Data de postagem: {{ date('d/m/y', strtotime($notice->date)) }}</span>
                    <span>- {{ $user->name }}</span>
                </div>
                <div class="d-flex">
                    <a href="/news/edit/{{ $notice->id }}" class="btn btn-primary mR-8">Editar</a>
                    
                    <form action="/news/{{ $notice->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="ad mB-32">
            <img src="/img/ads/ad1.gif" class="w-100" alt="">
        </div>

        <div class="w-75 mB-32">
            <div class="topic1">
                <p>{{ $topics[1] }}</p>
            </div>
        </div>

        <div class="ad d-flex mB-32">
            <img src="/img/ads/ad2.jpg" class="w-50 mR-16" alt="">
            <img src="/img/ads/ad2.jpg" class="w-50" alt="">
        </div>

        <div class="w-75 mB-32">
            <div class="topic1">
                <p>{{ $topics[2] }}</p>
            </div>
        </div>
        
    </div>

@endsection