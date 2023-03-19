@extends('layouts.main')
@section('content')
<section class="topup category--1">
    <div class="topup__container" style="margin-left: 20px;margin-right: 20px">
        @include('layouts.alert')
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="side-topup">
                <img src="{{asset($topup -> image)}}" style="height: auto; width: 100%; border-radius: 15px"/>
                    <h1 style="margin-top:20px; margin-bottom: 20px">{{$topup -> name}}</h1>
                   {!! $topup -> deskripsi !!}
                </div>
            </div>
            <div class="col-lg-7  col-sm-12">
            <form class="form-topup">
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">1.</span> MASUKKAN ID GAME</h2>
                        <p style="font-size: 12px;color: white;">Silahkan isi dengan format gabungan ID dan nomor server, contoh: 12345678 (1234) atau 12345678 (lokasi server), dan apabila tidak terdapat server tidak perlu diisi</p>
                        <div class="row">
                            <div class="input-group col">
                                <input type="number" class="form-control" aria-label="Small" placeholder="ID {{$topup -> name}}"
                                 style="margin-left: 10px; margin-right: 10px;" id="id-akun">

                            </div>
                            <div class="input-group col">
                                <input type="number" class="form-control" aria-label="Small" placeholder="Nomor Server" id="nomor-server">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">2.</span> PILIH NOMINAL TOP UP</h2>
                            <div class="row">
                                @foreach($nominal as $nominal)
                                    <div class="topup-nominal" id="topup-{{$nominal->id}}">{{$nominal -> nominal}} {{$nominal -> type}}</div>
                                @endforeach
                            <!-- <div class="topup-nominal" id="topup-2">5 Diamonds</div>
                            <div class="topup-nominal" id="topup-3">11 Diamonds</div>
                            <div class="topup-nominal" id="topup-4">25 Diamonds</div>
                            <div class="topup-nominal" id="topup-5">100 Diamonds</div> -->
                            </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">3.</span> PILIH METODE PEMBAYARAN</h2>
                        <div class="row">
                            
                        @foreach($payment as $p)
                            <div class="topup-bayar row" id="bayar-{{$p->id}}" >
                                <div style="width: 50%">
                                    <img src="{{asset($p -> image)}}" style="height: 50px; width: auto;"/>
                                </div>
                                <div class="harga-div">
                                   <h2 class="harga-topup" id="harga-{{$p->id}}"></h2>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">4.</span> BELI</h2>

                        <div id="pembayaran">
                            <p style="font-size: 12px;color: white;margin-left: 10px">Jika anda ingin mendapatkan bukti pembayaran, harap taruh alamat email anda</p>
                            <div class="input-group">
                                <input type="email" class="form-control" aria-label="Small" 
                                placeholder="Alamat Email" style="margin-left: 10px; margin-right: 10px;" 
                                id="email-member">

                            </div>
                            <div class="card" style="background-color: white; margin:10px; margin-top: 20px;padding: 20px; margin-bottom: 50px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col" id="nama_topup"></div>
                                        <div class="col" id="harga_topup" style="text-align: right"></div>
                                    </div>
                                    <div class="row" style="margin-top:10px;margin-bottom: 50px;">
                                        <div class="col"><b>Biaya Admin</b></div>
                                        <div class="col" style="text-align: right"><b id="biaya-admin">Rp.2,000</b></div>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col"><b>Total</b></div>
                                        <div class="col" style="text-align: right" id="total-price"><b>50,000</b></div>
                                    </div>
                                </div>

                            </div>


                            <button type="button" class="btn btn-info btn-lg btn-block"
                                    style="font-size: 18px;color: white;margin: 10px;width: 98%; padding:10px; "
                                    data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-beli">Beli</button>
                        </div>

                    </div>
                </div>

            </form>
            </div>
        </div>

    </div>

</section>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form" action="{{route('topup.save')}}" method="POST">
                @csrf
                <div class="modal-body" style="align-items: center">
                    <div class="modal-title">DETAIL PESANAN</div>
                    <div style="margin:20px">
                    <div >
                        <p style="font-size: 12px">Mohon konfirmasi data apakah sudah benar</p>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" 
                    style="margin-left: 10px; margin-right: 10px;font-weight:bold;" 
                    name= "popup_idtopup" id="popup-id-topup" hidden>
                    <input type="text" class="form-control" aria-label="Small" 
                    style="margin-left: 10px; margin-right: 10px;font-weight:bold;"
                    name= "popup_idbayar" id="popup-id-bayar" hidden>
                    <div class="row" style="margin-top:5px;">
                        <div class="col"  style=" font-size: 14px"><b>Pembayaran</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="text" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;font-weight:bold;"
                            name= "popup_metode" id="popup-metode" readonly >
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col"  style=" font-size: 14px"><b>Server</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="text" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;font-weight:bold;"
                            name= "popup_server" id="popup-server" readonly >
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col" style=" font-size: 14px"><b>ID</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="number" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;font-weight:bold;"
                            name= "popup_id" id="popup-id" readonly >
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col" style=" font-size: 14px"><b>Email</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="email" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;font-weight:bold;"
                            name= "popup_email" id="popup-email" readonly>
                        </div>
                    </div>
                    <div class="row" style="margin-top:15px;">
                        <div class="col" style=" font-size: 14px"><b>Harga</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="text" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;text-align:right;font-weight:bold;"
                            name="popup_harga" id="popup-harga" readonly >
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col" style=" font-size: 14px"><b>Biaya Admin</b></div>
                        <div class="col" style="text-align: right; font-size: 14px">
                            <input type="text" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;text-align:right;font-weight:bold;"
                            name="popup_admin" id="popup-admin" readonly >
                        </div>
                    </div>
                    <hr style="border: 2px solid black;margin-top:20px; margin-bottom: 20px">
                    <div class="row" style="margin-top:10px;">
                        <div class="col" style=" font-size: 16px"><b>Total Biaya</b></div>
                        <div class="col" style="text-align: right; font-size: 16px">
                            <input type="text" class="form-control" aria-label="Small" 
                            style="margin-left: 10px; margin-right: 10px;text-align:right;" 
                            name="popup_total" id="popup-total" readonly >
                        </div>
                    </div>
                    </div>

                </div>
                <div style="align-items: center; width: 100%; margin-bottom: 20px; margin-left: 28%">
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"
                            style=" padding:5px 25px 5px 25px ">KEMBALI</button>
                            <input type="submit" name="send" value="KONFIRMASI" class="btn btn-lg" style=" padding:5px 20px 5px 20px; background-color: green;color: white "/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
    <script>
        let topup = {!! $topup -> nominal !!};
    // let topup = [
    //         {"harga":2500,
    //             "id":1,
    //         "nama":"Diamonds"},
    //     {"harga":5000,
    //         "id":2,
    //         "nama":"5 Diamonds"},
    //     {"harga":7500,
    //         "id":3,
    //         "nama":"11 Diamonds"},
    //     {"harga":10000,
    //         "id":4,
    //         "nama":"25 Diamonds"},
    //     {"harga":12500,
    //         "id":5,
    //         "nama":"100 Diamonds"}];
    var id_topup = 0;
    var nama_topup = "";
    var harga_topup =0;
    var pembayaran ={!! $payment !!};;
    var id_bayar = 0;
    var nama_pembayaran = "";

    var form_beli = document.getElementById("pembayaran");
    form_beli.style.display  = 'none';


    topup.forEach(function(item, index, arr){
        var t = document.getElementById("topup-"+item.id);
        t.addEventListener('click', function(){
            // console.log(id_topup);
            if(id_topup != 0) {
                var t_sebelum = document.getElementById("topup-" + id_topup);
                t_sebelum.className = 'topup-nominal';
            }

            t.className = 'topup-nominal-active';
            cara_bayar(item.price);
            id_topup = item.id;
            nama_topup = item.type;
            harga_topup = item.price;

            if(id_topup != 0 && id_bayar != 0){
                getTotal(id_topup, id_bayar);
            }
        });
    })

    function cara_bayar(nominal){
        pembayaran.forEach(function(item, index, arr){
            var n = document.getElementById("harga-"+item.id);
            n.innerHTML = "Rp."+nominal.toLocaleString();;

        })
    }

    pembayaran.forEach(function(item, index, arr){
        var n = document.getElementById("harga-"+item.id);
        var bayar = document.getElementById("bayar-"+item.id);
        bayar.addEventListener('click', function(){

            if(id_bayar != 0) {
                var bayar_sebelum = document.getElementById("bayar-" + id_bayar);
                bayar_sebelum.className = 'topup-bayar row';
                var n_sebelum = document.getElementById("harga-" + id_bayar);
                n_sebelum.className = "harga-topup";
            }


            bayar.className = 'topup-bayar-active row';
            n.className = "harga-topup-active";

            id_bayar = item.id;
            var nama = document.getElementById("nama_topup");
            nama.innerHTML = "<b>Harga "+nama_topup+"</b>";
            var harga = document.getElementById("harga_topup");
            harga.innerHTML = "<b>Rp."+harga_topup.toLocaleString()+"</b>";
            form_beli.style.display  = 'block';
            nama_pembayaran = item.name;

            if(id_topup != 0 && id_bayar != 0){
                getTotal(id_topup, id_bayar);
            }

        });


    })

    var total = 0;
    var admin = 0;

    
    var btnbeli = document.getElementById("btn-beli");
    btnbeli.addEventListener('click', function(){
        // id harga metode total admin
        var popupId = document.getElementById("popup-id");
        popupId.value = document.getElementById("id-akun").value;
        var popupHarga = document.getElementById("popup-harga");
        popupHarga.value = "Rp."+harga_topup.toLocaleString();
        var popupMetode = document.getElementById("popup-metode");
        popupMetode.value = nama_pembayaran;
        var popupTotal = document.getElementById("popup-total");
        popupTotal.value = "Rp."+total.toLocaleString();
        var popupAdmin = document.getElementById("popup-admin");
        popupAdmin.value = "Rp."+admin.toLocaleString();
        var popupServer = document.getElementById("popup-server");
        popupServer.value = document.getElementById("nomor-server").value;
        var popupEmail = document.getElementById("popup-email");
        popupEmail.value = document.getElementById("email-member").value;
        var popupIdTopup = document.getElementById("popup-id-topup");
        popupIdTopup.value = id_topup;
        var popupIdBayar = document.getElementById("popup-id-bayar");
        popupIdBayar.value = id_bayar;
       
    })

    function getTotal(id_topup, id_payment) {
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
               type:'POST',
               url:'/topup/getTotal',
               data: {
                    "id_topup": id_topup,
                    "id_payment": id_payment,
                },
               success:function(data) {
                  $("#biaya-admin").html("Rp."+data.admin.toLocaleString());
                  $("#total-price").html("Rp."+data.total.toLocaleString());
                  admin = data.admin;
                  total = data.total;
                  
                // console.log(data);

               }
            });
         }

        //  function save(id_topup, id_payment) {
        //     $.ajax({
        //         headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 },
        //        type:'POST',
        //        url:'save',
        //        data: {
        //             "id_topup": id_topup,
        //             "id_payment": id_payment,
        //         },
        //        success:function(data) {
        //           $("#biaya-admin").html("Rp."+data.admin.toLocaleString());
        //           $("#total-price").html("Rp."+data.total.toLocaleString());
        //           admin = data.admin;
        //           total = data.total;
                  
        //         // console.log(data);

        //        }
        //     });
        //  }


    </script>
@endsection
