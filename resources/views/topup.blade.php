@extends('layouts.main')
@section('content')
<section class="topup category--1">
    <div class="topup__container" style="margin-left: 20px;margin-right: 20px">
        <div class="row">
            <div class="col-5">
                <div class="side-topup">
                <img src="{{asset('img/banner/benner1.png')}}" style="height: auto; width: 100%; border-radius: 15px"/>
                    <h1 style="margin-top:20px; margin-bottom: 20px">Mobile Legends</h1>
                    <p class="text-side">Beli diamond Mobile Legends jadi mudah, aman, dan praktis di RipoxStore.
                        Cukup ikuti langkah mudah berikut, dan diamond akan langsung terkirim ke akun Mobile Legends-mu hanya dalam hitungan detik.</p>
                    <ol>
                        <li class="text-side">Masukan User ID Mobile Legends-mu.</li>
                        <li class="text-side">Pilih jumlah diamond yang kamu inginkan.</li>
                        <li class="text-side">Pilih cara pembayaran yang paling mudah untuk-mu.</li>
                        <li class="text-side">Klik pada tombol "Beli" untuk menyelesaikan transaksi-mu.</li>
                    </ol>
                       <p class="text-side"> Setelah pembayaran berhasil, diamond akan langsung terkirim ke akun MLBB-mu, Happy topup.</p>
                </div>
            </div>
            <div class="col-7">
            <form class="form-topup">
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">1.</span> MASUKKAN ID GAME</h2>
                        <p style="font-size: 12px;color: white;">Silahkan isi dengan format gabungan ID dan nomor server, contoh: 12345678 (1234)</p>
                        <div class="row">
                            <div class="input-group col">
                                <input type="number" class="form-control" aria-label="Small" placeholder="ID Mobile Legends" style="margin-left: 10px; margin-right: 10px;">

                            </div>
                            <div class="input-group col">
                                <input type="number" class="form-control" aria-label="Small" placeholder="Nomor Server">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">2.</span> PILIH NOMINAL TOP UP</h2>
                            <div class="row">
                            <div class="topup-nominal" id="topup-1">Diamonds</div>
                            <div class="topup-nominal" id="topup-2">5 Diamonds</div>
                            <div class="topup-nominal" id="topup-3">11 Diamonds</div>
                            <div class="topup-nominal" id="topup-4">25 Diamonds</div>
                            <div class="topup-nominal" id="topup-5">100 Diamonds</div>
                            </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">3.</span> PILIH METODE PEMBAYARAN</h2>
                        <div class="row">
                            <div class="topup-bayar row" id="bayar-1" >
                                <div style="width: 50%">
                                    <img src="{{asset('img/logo/telkomsel.png')}}" style="height: 50px; width: auto;"/>
                                </div>
                                <div class="harga-div">
                                   <h2 class="harga-topup" id="harga-1"></h2>
                                </div>
                            </div>
                            <div class="topup-bayar row" id="bayar-2">
                                <div style="width: 50%">
                                    <img src="{{asset('img/logo/ShopeePay.png')}}" style="height: 50px; width: auto;"/>
                                </div>
                                <div class="harga-div">
                                    <h2 class="harga-topup" id="harga-2"></h2>
                                </div>
                            </div>
                            <div class="topup-bayar row" id="bayar-3">
                                <div style="width: 50%">
                                    <img src="{{asset('img/logo/ovo.png')}}" style="height: 50px; width: auto;"/>
                                </div>
                                <div class="harga-div">
                                    <h2 class="harga-topup" id="harga-3"></h2>
                                </div>
                            </div>
                            <div class="topup-bayar row" id="bayar-4">
                                <div style="width: 50%">
                                    <img src="{{asset('img/logo/bca.png')}}" style="height: 50px; width: auto;"/>
                                </div>
                                <div class="harga-div">
                                    <h2 class="harga-topup" id="harga-4"></h2>
                                </div>
                            </div>
                            <div class="topup-bayar row" id="bayar-5">
                                <div style="width: 50%;">
                                    <img src="{{asset('img/logo/dana.jpg')}}" style="height: 50px; width: auto"/>
                                </div>
                                <div class="harga-div">
                                    <h2 class="harga-topup" id="harga-5"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-topup">
                    <div class="card-body">
                        <h2 style="color:white;margin-bottom: 15px;"><span class="badge badge-light" style="color: black">4.</span> BELi</h2>

                        <div id="pembayaran">
                            <p style="font-size: 12px;color: white;margin-left: 10px">Jika anda ingin mendapatkan bukti pembayaran, harap taruh alamat email anda</p>
                            <div class="input-group">
                                <input type="email" class="form-control" aria-label="Small" placeholder="Alamat Email" style="margin-left: 10px; margin-right: 10px;">

                            </div>
                            <div class="card" style="background-color: white; margin:10px; margin-top: 20px;padding: 20px; margin-bottom: 50px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col" id="nama_topup"></div>
                                        <div class="col" id="harga_topup" style="text-align: right"></div>
                                    </div>
                                    <div class="row" style="margin-top:10px;margin-bottom: 50px;">
                                        <div class="col"><b>Biaya Admin</b></div>
                                        <div class="col" style="text-align: right"><b>2,000</b></div>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col"><b>Total</b></div>
                                        <div class="col" style="text-align: right"><b>50,000</b></div>
                                    </div>
                                </div>

                            </div>


                            <button type="button" class="btn btn-info btn-lg btn-block"
                                    style="font-size: 18px;color: white;margin: 10px;width: 98%; padding:10px; "
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
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

            <div class="modal-body" style="align-items: center">
                <div class="modal-title">DETAIL PESANAN</div>
                <div style="margin:20px">
                <div >
                    <p style="font-size: 12px">Mohon konfirmasi data apakah sudah benar</p>
                </div>
                <div class="row" style="margin-top:10px;">
                    <div class="col" style=" font-size: 14px"><b>ID</b></div>
                    <div class="col" style="text-align: right; font-size: 14px"><b>2,000</b></div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col" style=" font-size: 14px"><b>Harga</b></div>
                    <div class="col" style="text-align: right; font-size: 14px"><b>2,000</b></div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col" style=" font-size: 14px"><b>Biaya Admin</b></div>
                    <div class="col" style="text-align: right; font-size: 14px"><b>2,000</b></div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col"  style=" font-size: 14px"><b>Metode</b></div>
                    <div class="col" style="text-align: right; font-size: 14px"><b>2,000</b></div>
                </div>

                <hr style="border: 2px solid black;margin-top:20px; margin-bottom: 20px">
                <div class="row" style="margin-top:10px;">
                    <div class="col" style=" font-size: 16px"><b>Total Biaya</b></div>
                    <div class="col" style="text-align: right; font-size: 16px"><b>2,000</b></div>
                </div>
                </div>

            </div>
            <div style="align-items: center; width: 100%; margin-bottom: 20px; margin-left: 28%">
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"
                        style=" padding:5px 25px 5px 25px ">KEMBALI</button>
                <button type="button" class="btn btn-lg" style=" padding:5px 20px 5px 20px; background-color: green;color: white ">KONFIRMASI</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
    let topup = [
            {"harga":2500,
                "id":1,
            "nama":"Diamonds"},
        {"harga":5000,
            "id":2,
            "nama":"5 Diamonds"},
        {"harga":7500,
            "id":3,
            "nama":"11 Diamonds"},
        {"harga":10000,
            "id":4,
            "nama":"25 Diamonds"},
        {"harga":12500,
            "id":5,
            "nama":"100 Diamonds"}];
    var id_topup = 0;
    var nama_topup ="";
    var harga_topup =0;
    var pembayaran =[
        {"id":1,
        "jenis":"telkomsel"},
        {"id":2,
            "jenis":"ShopeePay"},
        {"id":3,
            "jenis":"ovo"},
        {"id":4,
            "jenis":"bca"},
        {"id":5,
            "jenis":"dana"},
    ];
    var id_bayar = 0;

    var form_beli = document.getElementById("pembayaran");
    form_beli.style.display  = 'none';


    topup.forEach(function(item, index, arr){
        var t = document.getElementById("topup-"+item.id);
        t.addEventListener('click', function(){
            if(id_topup != 0) {
                var t_sebelum = document.getElementById("topup-" + id_topup);
                t_sebelum.className = 'topup-nominal';
            }

            t.className = 'topup-nominal-active';
            cara_bayar(item.harga);
            id_topup = item.id;
            nama_topup = item.nama;
            harga_topup = item.harga;
        });
    })

    function cara_bayar(nominal){
        pembayaran.forEach(function(item, index, arr){
            var n = document.getElementById("harga-"+item.id);
            n.innerHTML = nominal.toLocaleString();;

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
            nama.innerHTML = "<b>"+nama_topup+"</b>";
            var harga = document.getElementById("harga_topup");
            harga.innerHTML = "<b>"+harga_topup.toLocaleString()+"</b>";
            form_beli.style.display  = 'block';

        });


    })


    </script>
@endsection
