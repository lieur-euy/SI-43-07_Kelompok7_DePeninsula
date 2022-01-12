<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pemesanan;
use App\Models\pemesanan_detail;

use Carbon\Carbon;


class produkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        $produk = produk::paginate(50);
        return view("halaman.produk", compact('user','produk'));
        }
    public function input(){
        return view('admin.addproduct');
    }
    public function detail($id){
        $user = Auth::user();
        $produk = produk::where('id', $id)->first();
        return view('halaman.detailproduk', compact('produk','user'));
    }
    public function store(Request $request){

        $data = new produk;
        $data->nama_produk= $request->nama_produk;
        $data->harga= $request->harga;
        $data->stock= $request->stock;
        $data->deskripsi= $request->deskripsi;
        $data->kategori= $request->kategori;
        $data->img = $request->img;
        $data->save();
        return redirect('admin');
        }
        public function pesan(Request $request,$id){
            $produk = produk::where('id',$id)->first();
            $tanggal = Carbon::now();

            $pesanan = new pemesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumnlah_harga = $produk->harga*$request->jumlah_pesanan;
            $pesanan->save();
    
            $pesanan_baru = pemesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

            $pesanan_deetails = new pemesanan_detail;
            $pesanan_deetails->barang_id = $produk->id;
            $pesanan_deetails->pemesanan_id = $pesanan_baru->id;
            $pesanan_deetails->jumnlah = $request->jumlah_pesanan;
            $pesanan_deetails->jumnlah_harga = $produk->harga * $request->jumlah_pesanan;
            $pesanan_deetails->save();
            
            return redirect('produk');
    }
    public function check_out(){
        $user = Auth::user();
        $pemesanan = pemesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_deetail = pemesanan_detail::where('pemesanan_id', $pemesanan->id)->get();

        return view('halaman.check_out', compact('pemesanan','pesanan_deetail','user'));
    }
    public function delete($id){

        $pesanan_deetail = pemesanan_detail::where('id' ,$id)->first();
        $pesanan_deetail->delete();
        return redirect('check-out');

    }
   
}
