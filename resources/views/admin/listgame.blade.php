
@extends('layouts.main')
@section('css')
 @endsection
 @section('content')
{{-- @include('layouts.sidebar') --}}
    
<div class="akun__container" style="margin-left: 20px;margin-right: 20px">
  <div class="row">
    <div class="col-lg-12">
        <div class="card card-history border" style="margin: 20px;">
            <div class="card-header bg-transparent ">
                <h2 class="my-0 text-white">List Game</h2>
            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th width="3%">#</th>
                                          <th>Date</th>
                                          <th>Nama</th>
                                          <th>Deskripsi</th>
                                          <th>Banner</th>
                                          <th>Tile</th>
                                          <th class="text-center">Status</th>
                                          <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($game as $value)
                                            <tr>
                                              <td>{{++$i}}</td>
                                              <td>{{date('d F Y H:i:s', strtotime($value->created_at))}}</td>
                                              <td>{{$value->name}}</td>
                                              <td>{!! substr($value -> deskripsi, 0, 300) . '...' !!}</td>
                                              <td><img src="{{asset($value->image)}}" class="category__product-img" alt=""></td>
                                              <td><img src="{{asset($value->image_tile)}}" class="category__product-img" alt=""></td>
                                              <td class="text-center">
                                                @if($value -> status == "active")
                                                <span class="badge rounded-pill badge-soft-success" data-key="t-hot"> {{$value->status}}</span>
                                                @else
                                                <span class="badge rounded-pill badge-soft-danger" data-key="t-hot"> {{$value->status}}</span>
                                                @endif
                                              </td>
                                              <td>
                                                <button type="button" class="btn btn-info btn-lg btn-block header"
                                                    style="font-size: 18px;color: white;margin: 10px;padding:10px;right:0px;"
                                                    id="btn-beli" onclick="location.href = '{{route('admin.topup.form', $value -> id)}}';">Paket Topup</button>
                                                <button type="button" class="btn btn-info btn-lg btn-block header"
                                                    style="font-size: 18px;color: white;margin: 10px;padding:10px;right:0px;"
                                                    id="btn-beli" onclick="location.href = '{{route('admin.akun.form', $value -> id)}}';">Paket Akun</button>
                  
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
                              {!! $game->render("pagination::bootstrap-4") !!}
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