<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NominalTopups;
use App\Models\PaymentMethods;
use App\Models\TopupTransactions;

class GameController extends Controller
{
    //

    public function getTotal(Request $request){
        $id_topup = $request -> id_topup;
        $id_bayar = $request -> id_bayar;

        $topup = Nominaltopups::find($id_topup);
        $bayar = PaymentMethods::find($id_bayar);

        $admin = 0;
        $total = $topup -> price + $admin;

        //return response
        return response()->json([
            'success' => true,
            'total' => $total,
            'admin'    => $admin,
            'price' => $topup -> price  
        ]);

    }

    public function save(Request $request){

        $this->validate($request, [
            'popup_idbayar' => 'required',
            'popup_id' => 'required',
            'popup_metode' => 'required',
            'popup_idtopup' => 'required',
            'popup_email' => 'required|email',
            'popup_harga' => 'required',
            'popup_admin' => 'required',
            'popup_total' => 'required'
        ]);

        $id_akun = $request -> popup_id;
        $email = $request -> popup_email;
        $server_number = $request -> popup_server;
        $id_topup = $request -> popup_idtopup;
        $id_bayar = $request -> popup_idbayar;
        $topup = Nominaltopups::find($id_topup);
        $price = $topup -> price;
        $admin = 0;
        $total = $price + $admin;

        $hasil = TopupTransactions::create([
            'email' => $email,
            'id_akun' => $id_akun,
            'server_number' => $server_number,
            'id_topup' => $id_topup,
            'id_bayar' => $id_bayar,
            'price' => $price,
            'admin' => $admin,
            'total' => $total,
            'status' => "new"
        ]);

        $bayar = PaymentMethods::find($id_bayar);
        $metode = $bayar -> name;

        $details = [
            'title' => 'Pembayaran Ripox',
            'subject' => 'Pembayaran Ripox',
            'body' => 'Terimakasih atas pembelian anda, <br>'.$topup -> game -> name.' '.
            number_format($topup -> nominal).'<br>Harga = '.$price.'<br>Admin = '.$admin.'<br>Total = '.$total.
            '<br>Silahkan kirim ke '.$metode.'<br>Terimakasih',
            'view' => 'email.myTestMail'
        ];
        \Mail::to($email)->send(new \App\Mail\MyMail($details));

        $request->session()->flash('success', 'Sukses, Silahkan cek email anda untuk melakukan pembayaran');
        return redirect()->back();
    }

    
}
