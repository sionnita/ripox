<?php

namespace App\Http\Controllers;

use App\Models\ListGame;
use App\Models\PaymentMethods;
use App\Models\ListAccounts;
use App\Models\NominalTopups;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $game = ListGame::get();

        return view('home',compact('game'));
    }

    public function topup(Request $request, $id){
        $topup = ListGame::find($id);
        $nominal = NominalTopups::where('list_id', $id)
                    -> where('status','active')
                    -> get();
        $payment = PaymentMethods::get();
        return view('topup',compact('topup','payment','nominal'));
    }

    public function akun(Request $request, $id){
        $lists = ListAccounts::where('list_id', $id)
                -> where('status','active')
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
