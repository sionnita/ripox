
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
                <h2 class="my-0 text-white">Transaksi Akun Game</h2>
            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th width="3%">#</th>
                                          <th>Date</th>
                                          <th>Nama Paket</th>
                                          <th>Nama Lengkap</th>
                                          <th>Email</th>
                                          <th>Whatsapp</th>
                                          <th>Togel</th>
                                          <th class="text-right">Harga</th>
                                          <th class="text-center">Status</th>
                                          <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($account as $value)
                                            <tr>
                                              <td>{{++$i}}</td>
                                              <td>{{date('d F Y H:i:s', strtotime($value->created_at))}}</td>
                                              <td>{{$value->list -> name}}</td>
                                              <td>{{$value->name}}</td>
                                              <td>{{$value->email}}</td>
                                              <td>{{$value->whatsapp}}</td>
                                              <td>{{$value->togel}}</td>
                                              <td>{{number_format($value->price)}}</td>
                                              <td class="text-center">
                                                @if($value -> status == "new")
                                                <span class="badge rounded-pill badge-soft-warning" data-key="t-hot"> {{$value->status}}</span>
                                                @elseif($value -> status == "bayar")
                                                <span class="badge rounded-pill badge-soft-success" data-key="t-hot"> {{$value->status}}</span>
                                                @else
                                                <span class="badge rounded-pill badge-soft-info" data-key="t-hot"> {{$value->status}}</span>
                                                @endif
                                              </td>
                                              <td class="text-center">
                                                @if($value -> status == "new")
                                                  <a type="button" class="btn-success btn-sm"
                                                  style="font-size: 18px;color: white;font-size:12px;" href="{{route('admin.akun.status', $value -> id)}}">Sudah Bayar</button>
                                                  <a type="button" class="btn-success btn-sm"
                                                  style="font-size: 18px;color: white;font-size:12px;" href="{{route('admin.akun.status', $value -> id)}}">Cancel</button>
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
                              {!! $account->render("pagination::bootstrap-4") !!}
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