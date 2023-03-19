
@extends('layouts.main')
@section('css')
 <!-- plugin css -->
 {{-- <link href="{{asset('assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" /> --}}

 <!-- swiper css -->
 {{-- <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}"> --}}
 <!-- Bootstrap Css -->
 {{--  --}}
 <!-- Icons Css -->
 {{-- <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" /> --}}
 <!-- App Css-->
 {{-- <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}

 @endsection
 @section('content')
{{-- @include('layouts.sidebar') --}}
    
<div class="akun__container" style="margin-left: 20px;margin-right: 20px">
  <div class="row">
    <div class="col-lg-12">
        <div class="card card-history border" style="margin: 20px;">
            <div class="card-header bg-transparent ">
                <h2 class="my-0 text-white">Transaksi Topup Game</h2>
            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th width="3%">#</th>
                                          <th>Date</th>
                                          <th>Paket Topup</th>
                                          <th>Email</th>
                                          <th>ID Akun</th>
                                          <th>Server Number</th>
                                          <th>Pembayaran</th>
                                          <th class="text-right">Harga</th>
                                          <th class="text-right">Admin</th>
                                          <th class="text-right">Total</th>
                                          <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($topup as $value)
                                            <tr>
                                              <td>{{++$i}}</td>
                                              <td>{{date('d F Y H:i:s', strtotime($value->created_at))}}</td>
                                              <td>{{$value->list -> game -> name}}</td>
                                              <td>{{$value->email}}</td>
                                              <td>{{$value->id_akun}}</td>
                                              <td>{{$value->server_number}}</td>
                                              <td>{{$value->bayar -> name}}</td>
                                              <td>{{number_format($value->price)}}</td>
                                              <td>{{number_format($value->admin)}}</td>
                                              <td>{{number_format($value->total)}}</td>
                                              <td class="text-center">
                                                @if($value -> status == "new")
                                                <span class="badge rounded-pill badge-soft-warning" data-key="t-hot"> {{$value->status}}</span>
                                                @elseif($value -> status == "bayar")
                                                <span class="badge rounded-pill badge-soft-success" data-key="t-hot"> {{$value->status}}</span>
                                                @else
                                                <span class="badge rounded-pill badge-soft-info" data-key="t-hot"> {{$value->status}}</span>
                                                @endif
                                              </td>
                                              
                                            </tr>
                                        @empty
                                          <tr>
                                            <td colspan="6" class="text-center">No data available in table</td>
                                          </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                              </div>
                              {!! $topup->render("pagination::bootstrap-4") !!}
                              </div>
          </div>
    </div><!-- end col -->
  </div>
</div>
@endsection
{{-- @section('scripts')
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
@endsection --}}