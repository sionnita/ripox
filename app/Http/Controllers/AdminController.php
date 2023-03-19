<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\ListGame;
use App\Models\TopupTransactions;
use App\Models\AccountTransactions;
use App\Models\ListAccounts;
use App\Models\NominalTopups;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(Request $request){
        return view('admin.dashboard');
    }

    public function viewAkun(Request $request){
        $account = AccountTransactions::orderBy('id','desc')
                    ->paginate(20);
        return view('admin.akuntransaksi',compact('account'))->with('i', (request()->input('page', 1) - 1) * 20);
    }
    

    public function viewTopup(Request $request){
        $topup = TopupTransactions::orderBy('id','desc')
                    ->paginate(20);
        return view('admin.topuptransaksi',compact('topup'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function viewGame(Request $request){
        $game = ListGame::orderBy('id','desc')
                    ->paginate(20);
        return view('admin.listgame',compact('game'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function formAkun(Request $request, $id){
        $data = ListGame::find($id);
        $nama = $data -> name;
        $game = ListGame::orderBy('id','desc')
                    ->get();
        $list = ListAccounts::where('list_id', $id)
                -> orderBy('id','desc')
                ->paginate(20);
        return view('admin.formakun',compact('game','list','nama','id'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function formTopup(Request $request, $id){
        $data = ListGame::find($id);
        $nama = $data -> name;
        $game = ListGame::orderBy('id','desc')
                ->get();
        $list = NominalTopups::where('list_id', $id)
                -> orderBy('id','desc')
                ->paginate(20);
        return view('admin.formtopup',compact('game','list','nama','id'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function saveAkun(Request $request){

        $this->validate($request, [
            'id' => 'required',
            'popup_nama' => 'required',
            'popup_harga' => 'required',
            'popup_image' => 'required|image',
            'wysiwyg_editor' => 'required'
        ]);

        $id = $request -> id;
        $nama = $request -> popup_nama;
        $harga = $request -> popup_harga;
        $keterangan = $request -> wysiwyg_editor;

        $tujuan_upload = 'img/banner';
        $popup_image = $request->file('popup_image');
        $extensions = $popup_image->getClientOriginalExtension();
    	$imgname = date('dmyHis').'.'.$extensions;
    	// $this->validate($request, ['foto-utama' => 'required|file|max:5000']);
    	// $path = Storage::putFileAs('public/img/banner', $request->file('popup_image'), $imgname);
        $popup_image->move($tujuan_upload,$imgname);

        $hasil = ListAccounts::create([
            'list_id' => $id,
            'name' => $nama,
            'image'=> 'img/banner/'.$imgname,
            'description' => $keterangan,
            'price' => $harga,
            'status' => "active"
        ]);

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }


    public function saveTopup(Request $request){

        $this->validate($request, [
            'id' => 'required',
            'popup_type' => 'required',
            'popup_nominal' => 'required',
            'popup_harga' => 'required'
        ]);

        $id = $request -> id;
        $type = $request -> popup_type;
        $nominal = $request -> popup_nominal;
        $harga = $request -> popup_harga;

        $hasil = NominalTopups::create([
            'list_id' => $id,
            'type' => $type,
            'nominal' => $nominal,
            'price' => $harga,
            'status' => "active"
        ]);

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }

    public function statusTopup(Request $request, $id){
        $topup = NominalTopups::find($id);

        $status = $topup -> status;
        if($status == "active"){
            $status = "nonactive";
        }else{
            $status = "active";
        }

        $topup -> status = $status;
        $topup -> save();

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }

    public function statusAkun(Request $request, $id){
        $topup = ListAccounts::find($id);

        $status = $topup -> status;
        if($status == "active"){
            $status = "nonactive";
        }else{
            $status = "active";
        }

        $topup -> status = $status;
        $topup -> save();

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }

    public function editTopup(Request $request){

        $this->validate($request, [
            'id_topup' => 'required',
            'popup_type' => 'required',
            'popup_nominal' => 'required',
            'popup_harga' => 'required'
        ]);

        $id = $request -> id_topup;
        $type = $request -> popup_type;
        $nominal = $request -> popup_nominal;
        $harga = $request -> popup_harga;

        $hasil = NominalTopups::find($id);
        $hasil -> update ([
            'type' => $type,
            'nominal' => $nominal,
            'price' => $harga
        ]);

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }
    

    public function editAkun(Request $request){

        $this->validate($request, [
            'id' => 'required',
            'popup_nama' => 'required',
            'popup_harga' => 'required',
            'wysiwyg_editor' => 'required'
        ]);

        $id = $request -> id;
        $nama = $request -> popup_nama;
        $keterangan = $request -> wysiwyg_editor;
        $harga = $request -> popup_harga;
        
        $hasil = ListAccounts::find($id);
        $hasil -> update ([
            'name' => $nama,
            'description' => $keterangan,
            'price' => $harga,
        ]);

        $request->session()->flash('success', 'Sukses');
        return redirect()->back();
    }
}
