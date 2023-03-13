@extends('layouts.main')
@section('content')
      <!-- Banner -->
      <section class="banner">
         <div class="banner__container">
            <div class="banner__slide">
               <img src="./img/banner/benner1.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/benner2.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/benner3.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/benner4.png" class="banner__img" alt="">
            </div>
            <div class="banner__slide">
               <img src="./img/banner/benner5.png" class="banner__img" alt="">
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
               <a href="#" class="category__product-container">
                  <img src="./img/game/mlbb_tile.jpg" class="category__product-img" alt="">
                  <p class="category__product-title">Mobile Legends</p>
               </a>
               <a href="/akungame" class="category__product-container">
                  <img src="./img/game/freefire_tile.jpg" class="category__product-img" alt="">
                  <p class="category__product-title">Free Fire</p>
               </a>
               <a href="#" class="category__product-container">
                  <img src="./img/game/PUBG_RPS11_tile.jpg" class="category__product-img" alt="">
                  <p class="category__product-title">PUBG Mobile</p>
               </a>
               <a href="#" class="category__product-container">
                  <img src="./img/game/lol.png" class="category__product-img" alt="">
                  <p class="category__product-title">League of Legends:Will Rift </p>
               </a>
               <a href="#" class="category__product-container">
                  <img src="./img/game/genshin_impact.png" class="category__product-img" alt="">
                  <p class="category__product-title">Genshin Impact</p>
               </a>
            </div>
         </div>
      </section>

@endsection
