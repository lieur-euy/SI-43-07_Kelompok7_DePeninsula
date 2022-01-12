<?php

namespace App\Http\Controllers;
use App\Models\pemesanan;
use App\Models\pemesanan_detail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\produk;

use Illuminate\Support\Facades\Auth;
class pesanController extends Controller
{
    public function pesan(Request $request, $id){
        
        $produk = produk::where('id', $id)->first();
        $tanggal = Carbon::now();
        $pesanan = new pemesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = 0;
        $pesanan->save();

        $pesanan_baru = pemesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_deetails = new pemesanan_detail;
        $pesanan_deetails->barang_id = $produk;
        $pesanan_deetails->pemesanan_id = $pesanan_baru->id;
        $pesanan_deetails->jumlah = $request->jumlah_pesanan;
        $pesanan_deetails->jumlah_harga = $produk->harga*$request->jumlah_pesanan;
        $pesanan_deetails->save();

        return view('halaman.home');
}
}
