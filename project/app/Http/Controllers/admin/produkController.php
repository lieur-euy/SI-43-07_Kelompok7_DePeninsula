<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


   
}
