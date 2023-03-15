
@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/akun-free-fire.css') }}">
@endsection
@section('content')
    <div class="box-container">
       
        @foreach($lists as $li)
        <div class="box">
            <div class="image">
                <img src="{{$li -> image}}" alt="">
            </div>
            <div class="info">
                <h3 class="judul">{{$li -> name}}</h3>
                <div class="subinfo">
                    <div class="harga">
                        Rp.{{number_format($li -> price)}}
                    </div>
                    <div class="detail">
                        <a href="{{ route('akun.detail', $li -> id) }}" style="font-size: 12px;">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection