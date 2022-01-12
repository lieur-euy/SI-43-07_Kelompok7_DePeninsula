<?php

namespace App\Http\Controllers\admin;
use App\Models\produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index(){
        $produk = produk::paginate(50);
        return view("admin.index",  compact('produk'));
        }
    public function store(Request $request)
    {
        return($request);
    }

}
