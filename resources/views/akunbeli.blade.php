
@extends('layouts.main')
@section('css')

{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@100;200;300;400;500&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}

{{-- <link rel="stylesheet" href="{{ asset('css/detail-akun.css') }}"> --}}
@endsection
@section('content')
    
<div class="akun__container" style="margin-left: 20px;margin-right: 20px">
        
        <div class="row ">
            <div class="col-lg-5 col-sm-12">
                <div class="card card-akun">
                <div class="card__title">
                    <h1>DETAIL AKUN</h1>
                </div>
                    <div class="card-body">
                        <img src="{{asset($details -> image)}}" style="height: auto; width: 100%; border-radius: 15px"/>
                            <h1 style="margin-top:20px; margin-bottom: 20px">{{$details -> name}}</h1>
                        <h1 style="color: white">Rp.{{number_format($details -> price)}}</h1>
                        
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-7  col-sm-12">
                <form class="form-topup" action="{{route('akun.save')}}" method="POST">
                    @csrf
                    <div class="card card-akun">
                        <div class="card__title">
                            <h1>INFORMASI PEMBELI</h1>
                            @include('layouts.alert')
                            <hr style="color: white">
                            <input type="text" class="form-control" placeholder="" value="{{$details -> id}}"
                                     style="margin-left: 10px; margin-right: 10px;" name="account_id" hidden>
                        </div>
                            <div class="card-body">
                                <div class="input-group row form-akun">
                                    <label class="label-akun">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder=""
                                     style="margin-left: 10px; margin-right: 10px;" name="nama">
    
                                </div>
                                <div class="input-group row form-akun">
                                    <label class="label-akun">Alamat Email</label>
                                    <input type="text" class="form-control"  placeholder=""
                                     style="margin-left: 10px; margin-right: 10px;" name="email">
    
                                </div>
                                <div class="input-group row form-akun">
                                    <label class="label-akun">Nomor Whatsapp</label>
                                    <input type="text" class="form-control" 
                                     style="margin-left: 10px; margin-right: 10px;" name="whatsapp">
    
                                </div>
                                <div class="input-group row form-akun">
                                    <label class="label-akun">Nomor Togel</label>
                                    <input type="text" class="form-control" 
                                     style="margin-left: 10px; margin-right: 10px;" name="togel">
    
                                </div>
                                <div style="display: flex;justify-content: right;">
                                    <input type="submit" class="btn btn-info btn-lg btn-block header"
                                        style="font-size: 18px;color: white;margin: 10px;width: 50%; 
                                        padding:10px;" value="Beli Sekarang">
                                
                                </div>
                               
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <div class="deskripsi-akun" style="margin-top: 50px;">
            <h1>Deskripsi Akun</h1>
            <div class="deskripsi-akun">
                {!! $details -> description !!}
            </div>
        </div>
</div>
@endsection