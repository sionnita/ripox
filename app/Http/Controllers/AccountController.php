<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NominalTopups;
use App\Models\PaymentMethods;
use App\Models\AccountTransactions;
use App\Models\ListAccounts;

class AccountController extends Controller
{
    public function save(Request $request){

        $this->validate($request, [
            'account_id' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
            'togel' => 'required'
        ]);

        $id = $request -> account_id;
        $nama = $request -> nama;
        $email = $request -> email;
        $whatsapp = $request -> whatsapp;
        $togel = $request -> togel;
        $account = ListAccounts::find($id);
        $price = $account -> price;

        $hasil = AccountTransactions::create([
                    'account_id' => $id,
                    'name' => $nama,
                    'email' => $email,
                    'whatsapp' => $whatsapp,
                    'togel' => $togel,
                    'price' => $price,
                    'status' => "new"
                ]);

                $details = [
                    'title' => 'Pembayaran Ripox',
                    'subject' => 'Pembayaran Ripox',
                    'body' => 'Terimakasih atas pembelian anda, <br>'.$account -> name.
                    '<br>Harga = '.$price.
                    '<br>Silahkan kirim ke no rek 000000 <br>Terimakasih',
                    '<br>Bila Ingin melakukan negosiasi akun silakan WhatsApp ke No:0895338076760',
                    'view' => 'email.myTestMail'
                ];
                \Mail::to($email)->send(new \App\Mail\MyMail($details));
        $request->session()->flash('success', 'Sukses, Silahkan cek email anda untuk melakukan pembayaran');
        return redirect()->back();
    }
}
