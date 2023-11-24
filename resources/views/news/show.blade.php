@extends('layouts/main')

@section('title', "Choquei News - $notice->title")

@section('content')
    
    <div class="d-flex justify-content-center w-100">
        <div class="img-notice">
            <img src="/img/news/{{ $notice->img }}" class="w-100" alt="{{ $notice->title }}">
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="w-75">

            <h1 class="">{{ $notice->title }}</h1>
            <section>
                {{ $notice->description }}
            </section>
        </div>
    </div>

@endsection