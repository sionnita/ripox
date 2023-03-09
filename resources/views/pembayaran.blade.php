@extends('layouts.main')
@section('content')
<section class="topup category--1">
    <div class="topup__container" style="margin-left: 20px;margin-right: 20px">
        <div class="row" style="display: inline-flex; justify-content: space-around; flex-direction: row">
            <div class="col-lg-5 col-sm-12">
                <div class="side-topup">
                <img src="{{asset('img/logo/dana.jpg')}}" style="height: auto; width: 100%; border-radius: 15px; margin-bottom: 20px"/>
                    <ol>
                        <li class="text-side-bayar">Masukkan no telepon</li>
                        <li class="text-side-bayar">Masukkan no pin akun dana anda</li>
                        <li class="text-side-bayar">Sistem dana akan mengirimkan kode ke nomor hp anda. masukkan kode tersebut</li>
                        <li class="text-side-bayar">“Klik tombol bayar” pada halaman konfirmasi pembayaran. transaksi selesai!</li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-5 col-sm-12" id="step-1">
            <form class="form-bayar">
                <div class="card card-bayar">
                    <div class="card-body" style=" justify-content: center">
                        <p style="font-size: 14px;color: white;text-align: center">Mohon masukkan nomor telepon sebagai ID DANA kamu</p>
                        <div class="row">
                            <div class="input-group col">
                                <input type="number" class="form-control" aria-label="Small" placeholder="No Telepone"
                                       style="margin-left: 10px; margin-right: 10px;">

                            </div>

                        </div>
                        <button type="button" class="btn btn-info btn-block "
                                style="font-size: 18px;color: white;margin-botom: 20px;bottom: 10px;position: absolute;
                                width: 83%; margin-left: 10px " onclick="click1()">Lanjutkan</button>
                    </div>
                </div>
            </form>
            </div>

            <div class="col-lg-5 col-sm-12" id="step-2">
                <form class="form-bayar">
                    <div class="card card-bayar">
                        <div class="card-body" style=" justify-content: center">
                            <p style="font-size: 20px;color: white; text-align: center">Mohon masukkan nomor pin  dana anda</p>
                            <div class="row">
                                <div class="input-group col">
                                    <input type="number" class="form-control" aria-label="Small" placeholder="No Telepone"
                                           style="margin-left: 10px; margin-right: 10px;">

                                </div>

                            </div>
                            <button type="button" class="btn btn-info btn-block "
                                    style="font-size: 18px;color: white;margin-botom: 20px;bottom: 10px;position: absolute;
                                width: 83%; margin-left: 10px ">Lanjutkan</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 col-sm-12" id="step-3">
                <form class="form-bayar">
                    <div class="card card-bayar">
                        <div class="card-body" style=" justify-content: center">
                            <p style="font-size: 12px;color: white;">Mohon masukkan nomor telepon sebagai ID DANA kamu</p>
                            <div class="row">
                                <div class="input-group col">
                                    <input type="number" class="form-control" aria-label="Small" placeholder="No Telepone"
                                           style="margin-left: 10px; margin-right: 10px;">

                                </div>

                            </div>
                            <button type="button" class="btn btn-info btn-block "
                                    style="font-size: 18px;color: white;margin-botom: 20px;bottom: 10px;position: absolute;
                                width: 83%; margin-left: 10px ">Lanjutkan</button>
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
   for(var i =1; i<4; i++){
       var step_= document.getElementById("step-"+i);
       if(i>1){
           step_.style.display  = 'none';
       }
   }

   function click1(){
       for(var i =1; i<4; i++){
           var step_= document.getElementById("step-"+i);
           if(i!=2){
               step_.style.display  = 'none';
           }else{
               step_.style.display  = 'block';
           }

       }
   }


    </script>
@endsection
