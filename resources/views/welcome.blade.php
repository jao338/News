@extends('layouts/main')

@section('title', 'Choquei News - Dashboard')

@section('content')

    @if (session('msg'))
        <h3 class="mB-16">{{ session('msg') }}</h3>
    @endif

    @if (isset($search))

        <h2 class="mB-32">Buscando por: </h2>

        @foreach ($search as $item)
        
        <div class="row mB-32">
            <div class="col-md-3">
                <img src="/img/news/{{$item->img}}" class="w-100" style="border-radius: 16px" alt="">
            </div>
            <div class="d-flex align-items-center col-md-9 pL-16">
                <a href="/" class="text-decoration-none" style="font-size: 18pt; font-weight: bold; color: #C4170C">{{ $item->title }}</a>
            </div>
        </div>
        
        @endforeach
    @else
        @if (isset($allNotices) && count($allNotices) == 0)
            <p>Nenhuma notícia foi encontrada, <a href="/news/create" class="text-decoration-none">criar notícia</a></p>
        @else
            
            @php
                $lastTopics = json_decode($lastNotice->topic, TRUE);
            @endphp

            <div class="d-flex flex-column align-items-center justify-content-end new mB-32 pB-64" style="background-image: url('/img/news/{{ $lastNotice->img }}')">
                <a href="/news/{{ $lastNotice->id }}" class="title-new text-center text-decoration-none pL-32 pR-32 pB-8">{{ $lastNotice->title }}</a>
                <a href="/news/{{ $lastNotice->id }}" style="width: 60%" class="subtitle-new text-center text-decoration-none pL-32 pR-32 overflow-ellipsis">{{ $lastTopics[0] }}</a>
            </div>

            <div class="ad mB-32">
                <img src="/img/ads/ad1.gif" class="w-100" alt="">
            </div>

            @foreach ($lastNotices as $notice)

                <div class="row mB-16">
                    
                    @php
                        $topics = json_decode($notice->topic, TRUE);
                    @endphp

                    <div class="news col-md-10 d-flex justify-content-center">

                        <div class="new-grid d-flex align-items-center w-100">
                            <a href="/news/{{ $notice->id }}" class="mR-16">
                                <div class="thumb-new">
                                    <img src="/img/news/{{ $notice->img }}" class="w-100" alt="{{ $notice->title }}">
                                </div>
                            </a>

                            <div class="row mL-16">
                                <a href="/news/{{ $notice->id }}" class="title-new-grid text-decoration-none text-wrap">{{ $notice->title }}</a>
                                <p style="width: 512px" class="overflow-ellipsis mL-16">{{ $topics[0] }}</p>
                            </div>
                            
                        </div>

                    </div>

                    <div class="ads col-md-2 d-flex justify-content-end">
                        <a href="/" class="d-flex mL-16" style="overflow: hidden;">
                            <img src="/img/ads/ad2.jpg" alt="">
                        </a>
                    </div>  
                            
                </div>
            @endforeach

                <div class="ad d-flex w-100 mB-32">
                    <img src="/img/ads/ad2.jpg" class="w-50 mR-16" alt="">
                    <img src="/img/ads/ad2.jpg" class="w-50" alt="">
                </div>

                
                <div class="row cards mB-32">
                    
                    @foreach ($allNotices as $notice)
                    
                    @if (!in_array("Politica", json_decode($notice->themes, TRUE)))

                    @else

                    <h2>Política</h2>

                        <div class="col-md-3">
                            <div class="card mR-32">
                                <div class="p-0 card-header">
                                    <img src="/img/news/{{ $notice->img }}" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="/news/{{ $notice->id }}" class="text-decoration-none">{{ $notice->title }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @endforeach

                </div>

                
                <div class="row cards">
                    
                    @foreach ($allNotices as $notice)
                    
                    @if (!in_array("Saude", json_decode($notice->themes, TRUE)))
                    
                    @else

                    <h2>Saúde</h2>

                        <div class="col-md-3">
                            <div class="card mR-32">
                                <div class="p-0 card-header">
                                    <img src="/img/news/{{ $notice->img }}" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="/news/{{ $notice->id }}" class="text-decoration-none">{{ $notice->title }}</a>
                                </div>
                            </div>
                        </div>

                    @endif

                    @endforeach

                </div>
        @endif
    @endif

@endsection