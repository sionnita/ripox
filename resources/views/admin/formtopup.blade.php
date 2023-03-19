
@extends('layouts.main')
@section('css')
 @endsection
 @section('content')
{{-- @include('layouts.sidebar') --}}
    
<section class="topup category--1">
  <div class="akun__container" style="margin-left: 20px;margin-right: 20px">
    <div class="row">
      <div class="col-lg-12">
        
        @include('layouts.alert')
          <div class="card card-history border" style="margin: 20px;">
              <div class="card-header bg-transparent row ">
                <div class="col-6">
                  <h2 class="my-0 text-white">List Paket Topup Game {{$nama}}</h2>
                </div>
                <div class="col-6" style="display: flex;justify-content: right;">
                  <button type="button" class="btn header btn-lg btn-block"
                                      style="font-size: 18px;color: white;padding:10px;text-align:end"
                                      data-bs-toggle="modal" data-bs-target="#addModal" id="btn-add">Tambah</button>
                          
                </div>
              </div>
                              <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead>
                                          <tr>
                                            <th width="3%">#</th>
                                            <th>Date</th>
                                            <th>Nominal</th>
                                            <th>Type</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @forelse ($list as $value)
                                              <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{date('d F Y H:i:s', strtotime($value->created_at))}}</td>
                                                <td>{{ number_format($value->nominal) }}</td>
                                                <td>{{$value -> type}}</td>
                                                <td>{{ number_format($value->price) }}</td>
                                                <td>
                                                  @if($value -> status == "active")
                                                  <span class="badge rounded-pill badge-soft-info" data-key="t-hot"> {{$value->status}}</span>
                                                  @else
                                                  <span class="badge rounded-pill badge-soft-danger" data-key="t-hot"> {{$value->status}}</span>
                                                  @endif
                                                </td>
                                                <td class="text-center">
                                                  <button type="button" class="btn header btn-sm"
                                                  style="font-size: 18px;color: white;font-size:12px;"
                                                  data-bs-toggle="modal" data-bs-target="#addModal" id="btn-edit"
                                                  data-type = "{{$value -> type}}" data-id = "{{$value -> id}}" data-nominal = "{{$value -> nominal}}"  data-price = "{{$value -> price}}">Edit</button>
                                                  @if($value -> status == "active")
                                                  <a type="button" class="btn-danger btn-sm"
                                                  style="font-size: 18px;color: white;font-size:12px;" href="{{route('admin.topup.status', $value -> id)}}">Nonaktifkan</button>
                                                  @else
                                                  <a type="button" class="btn-success btn-sm"
                                                  style="font-size: 18px;color: white;font-size:12px;" href="{{route('admin.topup.status', $value -> id)}}">Aktifkan</button>
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
                                {!! $list->render("pagination::bootstrap-4") !!}
                                </div>
            </div>
      </div><!-- end col -->
    </div>
  </div>
</section>

  <div class="modal fade bd-example-modal addModal" id="addModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div id ="addForm">
            <form class="form" action="{{route('admin.topup.save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="align-items: center">
                    <div class="modal-title" id="title"></div>
                    <div style="margin:20px">
                    <input type="text" class="form-control" aria-label="Small" 
                    style="margin-left: 10px; margin-right: 10px;font-weight:bold;" 
                    name= "id" id="id" value="{{$id}}" hidden>
                    <div class="form-group" style="margin-top:5px;">
                        <div style=" font-size: 14px"><b>Type</b></div>
                        <div style="font-size: 14px">
                            <input type="text" name= "popup_type"  >
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:5px;">
                        <div style=" font-size: 14px"><b>Nominal</b></div>
                        <div style="text-align: right; font-size: 14px">
                            <input type="number" name= "popup_nominal" >
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:5px;">
                      <div style=" font-size: 14px"><b>Harga</b></div>
                      <div style="text-align: right; font-size: 14px">
                          <input type="number" name= "popup_harga" >
                      </div>
                  </div>
                    
  
                </div>
                <div style="align-items: center; width: 100%; margin-bottom: 20px; margin-left: 28%">
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"
                            style=" padding:5px 25px 5px 25px ">KEMBALI</button>
                            <input type="submit" name="send" value="TAMBAH" class="btn btn-lg" style=" padding:5px 20px 5px 20px; background-color: green;color: white "/>
                </div>
            </form>
          </div>
        </div>

          <div id ="editForm">
            <form class="form" action="{{route('admin.topup.edit')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body" style="align-items: center">
                  <div class="modal-title" id="title"></div>
                  <div style="margin:20px">
                  <input type="text" class="form-control" aria-label="Small" 
                  style="margin-left: 10px; margin-right: 10px;font-weight:bold;" 
                  name= "id_topup" id="id-topup" hidden>
                  <div class="form-group" style="margin-top:5px;">
                      <div style=" font-size: 14px"><b>Type</b></div>
                      <div style="font-size: 14px">
                          <input type="text" name= "popup_type"  id= "popup-type"   >
                      </div>
                  </div>
                  <div class="form-group" style="margin-top:5px;">
                      <div style=" font-size: 14px"><b>Nominal</b></div>
                      <div style="text-align: right; font-size: 14px">
                          <input type="number" name= "popup_nominal" id= "popup-nominal"  >
                      </div>
                  </div>
                  <div class="form-group" style="margin-top:5px;">
                    <div style=" font-size: 14px"><b>Harga</b></div>
                    <div style="text-align: right; font-size: 14px">
                        <input type="number" name= "popup_harga"  id= "popup-harga"  >
                    </div>
                </div>
                  

              </div>
              <div style="align-items: center; width: 100%; margin-bottom: 20px; margin-left: 28%">
                  <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"
                          style=" padding:5px 25px 5px 25px ">KEMBALI</button>
                          <input type="submit" name="send" value="UBAH" class="btn btn-lg" style=" padding:5px 20px 5px 20px; background-color: green;color: white "/>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
  
</div>

@endsection
@section('scripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script>
   $( "#btn-edit" ).click(function() {
     $("#editForm").css("display", "block");
     $("#addForm").css("display", "none");
     $('#title').html("Edit Paket");
     $('#popup-type').val($(this).data('type'));
     $('#id-topup').val($(this).data('id'));
     $('#popup-nominal').attr('value',$(this).data('nominal'));
     $('#popup-harga').attr('value',$(this).data('price'));
   });

   $( "#btn-add" ).click(function() {
     $("#editForm").css("display", "none");
     $("#addForm").css("display", "block"); 
     $('#title').html("Tambah Paket");

   });
</script>
@endsection