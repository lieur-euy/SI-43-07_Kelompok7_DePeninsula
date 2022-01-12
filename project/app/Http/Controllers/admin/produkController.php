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
    public function create(){
        return view('admin.addproduct');
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
