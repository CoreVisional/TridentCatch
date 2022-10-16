@extends('layouts.app')

@section('title', 'Buy Fresh Seafood Online | Largest Online Fresh Seafood Delivery - TridentCatch')

@section('content')

{{-- Hero Section --}}
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-interval="3000" data-bs-ride="carousel">

        {{-- Slides indicators --}}
        <ol class="carousel-indicators">
            <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="3"></li>
        </ol>

        {{-- Wrapper for slideshows --}}
        <div class="carousel-inner" role="listbox">
            {{-- First Slide --}}
            <div class="carousel-item hero__image-1 active">
                <div class="carousel-container hero__flex">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown extra-spacing">Welcome to TridentCatch</h2>
                        <p class="animate__animated animate__fadeInUp">Freshness of the sea awaits you. Fresh
                            catches daily and more</p>
                        <a href="{{ route('shop.index') }}"
                            class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop
                            Now</a>
                    </div>
                </div>
            </div>
            {{-- Second Slide --}}
            <div class="carousel-item hero__image-2">
                <div class="carousel-container hero__flex">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown extra-spacing">OUR TEAM</h2>
                        <p class="animate__animated animate__fadeInUp">We at TridentCatch not only care about the
                            freshness of our products, but also ensuring that you can reach out to us. Read more about
                            our team.</p>
                        <a href="{{ route('about-us') }}"
                            class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>
            {{-- Third Slide --}}
            <div class="carousel-item hero__image-3">
                <div class="carousel-container hero__flex">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown extra-spacing">FRESHNESS DELIVERED</h2>
                        <h3 class="animate__animated animate__fadeInUp">IN OUR STORE</h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item hero__image-4">
                <div class="carousel-container hero__flex">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown extra-spacing">THE SHOP TO BUY FOR FRESH
                            SEAFOOD</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- Previous control/icon --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="prev-icon hero__flex" aria-hidden="true">
                <x-svg.icons.homepage.hero.chevron-left class="chevron-icon" />
            </span>
            <span class="visually-hidden">Previous</span>
        </button>

        {{-- Next control/icon --}}
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="next-icon hero__flex" aria-hidden="true">
                <x-svg.icons.homepage.hero.chevron-right class="chevron-icon" />
            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

{{-- Product categories --}}
<div class="category category__flex">
    <div class="category__container">
        <a href="#">
            <h2>Wholefish</h2>
        </a>
    </div>
    <div class="category__container">
        <a href="#">
            <h2>Shellfish</h2>
        </a>
    </div>
    <div class="category__container">
        <a href="#">
            <h2>Roe</h2>
        </a>
    </div>
    <div class="category__container">
        <a href="#">
            <h2>Fishcuts</h2>
        </a>
    </div>
</div>

@endsection