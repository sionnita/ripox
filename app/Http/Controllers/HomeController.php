<?php

namespace App\Http\Controllers;

use App\Models\ListGame;
use App\Models\PaymentMethods;
use App\Models\ListAccounts;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $game = ListGame::get();

        return view('home',compact('game'));
    }

    public function topup(Request $request, $id){
        $topup = ListGame::find($id);
        $payment = PaymentMethods::get();
        return view('topup',compact('topup','payment'));
    }

    public function akun(Request $request, $id){
        $lists = ListAccounts::where('list_id', $id)
                -> get();

        return view('akungame',compact('lists'));
    }

    public function akunDetail(Request $request, $id){
        $details = ListAccounts::find($id);

        return view('detail',compact('details'));
    }

    public function akunBeli(Request $request, $id){
        $details = ListAccounts::find($id);

        return view('akunbeli',compact('details'));
    }
}
