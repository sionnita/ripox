@extends('layouts.main')
@section('content')
      <!-- Banner -->
      <section class="banner">
         <div class="banner__container">
            <div class="banner__slide">
               <img src="./img/banner/mlbanner.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/ffbanner.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/pubgbanner.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/lolbanner.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/gibanner.png" class="banner__img" alt="">
            </div>
         </div>
      </section>
     

      <!-- Category 1 Category Popular -->
      <section class="category category--1">
         <div class="category__container">
            <h1 class="category__title">Top Up Game </h1>
            <div class="category__product">
               @foreach($game as $games)
               <a href="{{ $games -> id == 5 ? 'https://www.midasbuy.com/midasbuy/id/buy?appid=1450015065' : route('topup.index', $games -> id) }}" class="category__product-container">
                  <img src="{{asset($games -> image_tile)}}" class="category__product-img" alt="">
                  <p class="category__product-title">{{$games -> name}}</p>
               </a>
               @endforeach
            </div>
         </div>
      </section>

      <!-- Category Beli Akun -->
      <section class="category beli akun">
         <div class="category__container">
            <h1 class="category__title">Akun Game</h1>
            <div class="category__product">
               @foreach($game as $games)
               <a href="{{ route('akun.index', $games -> id) }}" class="category__product-container">
                  <img src="{{asset($games -> image_tile)}}" class="category__product-img" alt="">
                  <p class="category__product-title">{{$games -> name}}</p>
               </a>
               @endforeach
            </div>
         </div>
      </section>

@endsection
