@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="jumbotron">
            <img src="{{  asset('images/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
        <div class="film-section">
            <div class="current-series">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="film-container">
                @foreach ($comics as $comic)
                    <div class="film-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <p>{{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <button>LOAD MORE</button>
        </div>
        <div class="banner">
            <div class="container-banner">
              <div class="icon">
                <img src={{  asset('images/buy-comics-digital-comics.png') }} alt="Digital Comics">
                <h3>DIGITAL COMICS</h3>
              </div>
              <div class="icon">
                <img src={{  asset('images/buy-comics-merchandise.png') }} alt="DC Merchandise">
                <h3>DC MERCHANDISE</h3>
              </div>
              <div class="icon">
                <img src={{  asset('images/buy-comics-subscriptions.png') }} alt="Subscriptions">
                <h3>SUBSCRIPTIONS</h3>
              </div>
              <div class="icon">
                <img src={{  asset('images/buy-comics-shop-locator.png') }} alt="Comic Shop Locator">
                <h3>COMIC SHOP LOCATOR</h3>
              </div>
              <div class="icon">
                <img src={{  asset('images/buy-dc-power-visa.svg') }} alt="DC Power Visa">
                <h3>DC POWER VISA</h3>
              </div>
            </div>
        </div>
    </main>
@endsection