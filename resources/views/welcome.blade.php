@extends('layouts/main')

@section('title', 'Choquei News - Dashboard')

@section('content')
    
    @if (session('msg'))
        <h3>{{ session('msg') }}</h3>
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

