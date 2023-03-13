<?php

namespace App\Http\Controllers;

use App\Models\ListGame;
use App\Models\PaymentMethods;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $game = ListGame::get();

        return view('home',compact('game'));
    }

    public function topup(Request $request, $id){
        $topup = ListGame::find($id);
        $payment = PaymentMethods::get();
        return view('topup',compact('topup','payment'));
    }
}
