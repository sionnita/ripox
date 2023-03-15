
@extends('layouts.main')
@section('css')

{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@100;200;300;400;500&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}

{{-- <link rel="stylesheet" href="{{ asset('css/detail-akun.css') }}"> --}}
@endsection
@section('content')
    
<div class="topup__container" style="margin-left: 20px;margin-right: 20px">
        
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="side-topup">
                <img src="{{asset($details -> image)}}" style="height: auto; width: 100%; border-radius: 15px"/>
                    <h1 style="margin-top:20px; margin-bottom: 20px">{{$details -> name}}</h1>
                   <h1 style="color: white">Rp.{{number_format($details -> price)}}</h1>
                <div style="display: flex;
                justify-content: right;">
                    <button type="button" class="btn btn-info btn-lg btn-block header"
                                    style="font-size: 18px;color: white;margin: 10px;
                                    width: 50%; padding:10px;right:0px;"
                                    id="btn-beli" onclick="location.href = '{{ route('akun.beli', $details -> id) }}';">Beli</button>
                  
                </div>
                       
                </div>
            </div>
            <div class="col-lg-7  col-sm-12">
        <div class="deskripsi-akun">
            <h2>Deskripsi Akun</h2>
            <div class="deskripsi-akun">
                {!! $details -> description !!}
            </div>
        </div>
    </div>
@endsection