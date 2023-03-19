
@extends('layouts.main')
@section('css')
 @endsection
 @section('content')
    
<div class="col akun__container" style="margin-left: 20px;margin-right: 20px; display: flex;justify-content: center;">
    <div class="row">
    <a href="{{route('admin.akun.view')}}" class="col-5 col-sm-12">
        <div class="card card-akun" style="background-color:#f3d893;">
            <div class="card__title">
                <h1  style="color: black;">Transaksi Akun Game</h1>
            </div>
                <div class="card-body"  style="display: flex;justify-content: right;">
                    <div style="color: black; font-size:14px;">Klik</div> 
                </div>
        </div>
    </a>
    <a href="{{route('admin.topup.view')}}"  class="col-5 col-sm-12">
        <div class="card card-akun"  style="background-color:#00345b">
            <div class="card__title">
                <h1>Transaksi Topup Game</h1>
            </div>
            <div class="card-body"  style="display: flex;justify-content: right;">
                <div style="color: white; font-size:14px;">Klik</div> 
            </div>
        </div>
    </a>
    <a href="{{route('admin.game')}}"  class="col-12">
        <div class="card card-akun"  style="background-color:#001920">
            <div class="card__title">
                <h1>List Game</h1>
            </div>
            <div class="card-body"  style="display: flex;justify-content: right;">
                <div style="color: white; font-size:14px;">Klik</div> 
            </div>
        </div>
    </a>
    </div>
    <div class="row">
    
    </div>
</div>
</div>
@endsection
@section('scripts')
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
@endsection