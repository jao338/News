@extends('layouts/main')

@section('title', 'Choquei News - Dashboard')

{{-- @section('content')
    
    @if (session('msg'))
        <h3 class="mB-16">{{ session('msg') }}</h3>
    @endif

    <div class="d-flex flex-column align-items-center justify-content-end new mB-16 pB-64">
        <a href="/" class="title-new text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
        <a href="/" class="subtitle-new text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
    </div>

    <div class="ad mB-32">
        <img src="/img/bg.jpg" class="w-100" alt="">
    </div>

    <div class="row mB-16">
        <div class="news col-md-10 d-flex justify-content-center">

            <div class="new-grid d-flex align-items-center">
                <a href="/" class="w-50 mR-16">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
                <div class="row">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p>Lorem ipsum ipsum</p>
                </div>
            </div>
        
        </div>
        <div class="ads col-md-2 d-flex justify-content-end">
            <a href="/" class="w-75">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>
    </div>

    <div class="row mB-16">
        <div class="news col-md-10 d-flex justify-content-center">

            <div class="new-grid d-flex align-items-center">
                <a href="/" class="w-50 mR-16">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
                <div class="row">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p>Lorem ipsum ipsum</p>
                </div>
            </div>
        
        </div>
        <div class="ads col-md-2 d-flex justify-content-end">
            <a href="/" class="w-75">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>
    </div>

    <div class="row mB-32">
        <div class="news col-md-10 d-flex justify-content-center">

            <div class="new-grid d-flex align-items-center">
                <a href="/" class="w-50 mR-16">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
                <div class="row">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p>Lorem ipsum ipsum</p>
                </div>
            </div>
        
        </div>
        <div class="ads col-md-2 d-flex justify-content-end">
            <a href="/" class="w-75">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>
    </div>

    <div class="ad d-flex w-100 mB-32">
        <img src="/img/bg.jpg" class="w-50 mR-8" alt="">
        <img src="/img/bg.jpg" class="w-50 mL-8" alt="">
    </div>

    <div class="row mB-16">

        <div class="ads col-md-2 d-flex justify-content-start">
            <a href="/" class="w-100">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>

        <div class="news col-md-10 d-flex justify-content-center">
            <div class="new-grid d-flex align-items-start">
                
                <div class="row mR-16">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap text-end">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p class="text-end">Lorem ipsum ipsum</p>
                </div>

                <a href="/" class="w-50">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
            </div>
        </div>

    </div>

    <div class="row mB-16">

        <div class="ads col-md-2 d-flex justify-content-start">
            <a href="/" class="w-100">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>

        <div class="news col-md-10 d-flex justify-content-center">
            <div class="new-grid d-flex align-items-start">
                
                <div class="row mR-16">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap text-end">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p class="text-end">Lorem ipsum ipsum</p>
                </div>

                <a href="/" class="w-50">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
            </div>
        </div>

    </div>

    <div class="row mB-32">

        <div class="ads col-md-2 d-flex justify-content-start">
            <a href="/" class="w-100">
                <img src="/img/bg.jpg" class="w-100" alt="">
            </a>
        </div>

        <div class="news col-md-10 d-flex justify-content-center">
            <div class="new-grid d-flex align-items-start">
                
                <div class="row mR-16">
                    <a href="/" class="title-new-grid text-decoration-none text-wrap text-end">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                    <p class="text-end">Lorem ipsum ipsum</p>
                </div>

                <a href="/" class="w-50">
                    <img src="/img/bg.jpg" class="w-100" alt="">
                </a>
            </div>
        </div>

    </div>

    <div class="ad mB-32">
        <img src="/img/bg.jpg" class="w-100" alt="">
    </div>


@endsection
 --}}

@section('content')
 
@php
    $lastTopics = json_decode($lastNotice->topic, TRUE);
@endphp

    @if (session('msg'))
        <h3 class="mB-16">{{ session('msg') }}</h3>
    @endif
        
        <div class="d-flex flex-column align-items-center justify-content-end new mB-16 pB-64">
            <a href="/news/{{ $lastNotice->id }}" class="title-new text-center text-decoration-none pL-32 pR-32 pB-8">{{ $lastNotice->title }}</a>
            <a href="/news/{{ $lastNotice->id }}" style="width: 60%" class="subtitle-new text-center text-decoration-none pL-32 pR-32 overflow-ellipsis">{{ $lastTopics[0] }}</a>
        </div>
        
        <div class="ad mB-32">
            <img src="/img/ads/ad1.gif" class="w-100" alt="">
        </div>

        @foreach ($allNotices as $notice)

            @php
                $topics = json_decode($notice->topic, TRUE);
            @endphp

            <div class="row mB-16">
                <div class="news col-md-10 d-flex justify-content-center">
        
                    <div class="new-grid d-flex align-items-center">
                        <a href="/news/{{ $notice->id }}" class="mR-16">
                            <div class="thumb-new">
                                <img src="/img/news/{{ $notice->img }}" class="w-100" alt="{{ $notice->title }}">
                            </div>
                        </a>

                        <div class="row">
                            <a href="/news/{{ $notice->id }}" class="title-new-grid text-decoration-none text-wrap">{{ $notice->title }}</a>
                            <p style="width: 512px" class="overflow-ellipsis">{{ $topics[0] }}</p>
                        </div>
                    </div>
                
                </div>
                <div class="ads col-md-2 d-flex justify-content-end">
                    <a href="/" class="w-75">
                        <img src="/img/bg.jpg" class="w-100" alt="">
                    </a>
                </div>
                
            </div>
        @endforeach

        <div class="ad d-flex w-100 mB-32">
            <img src="/img/ads/ad2.jpg" class="w-50 mR-8" alt="">
            <img src="/img/ads/ad3.jpeg" class="w-50 mR-8" alt="">
        </div>
@endsection