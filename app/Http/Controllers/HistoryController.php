<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\DataPetani;
use App\Models\PesananDetail;
use Auth;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanan  = Pesanan::where('id_user', Auth::user()->id)->where('status','!=',0)->get();

    	return view('history.index', compact('pesanan'));
    }
    public function detail($id)
    {
        $pesanan = Pesanan::where('id',$id)->first();
        $pesanan_details = PesananDetail::where('id_pesanan', $pesanan->id)->get();

        return view('history.detail', compact('pesanan','pesanan_details'));

    }

}
