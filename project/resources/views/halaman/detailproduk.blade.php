@extends('layout.layout')
<br>
<br>
<br>
<br>
<div class="container-kategori container bg-white shadow-lg">
    <div class=" row text-center">
      <div class="col-lg-6 col-md-3 col-sm-5 col-8">
        <div class="menu-produk shadow-lg">
            <h3 class="pproduk">{{$produk->name}}</h3>
            <a href="#"> <img src="{{url('src')}}/{{$produk->img}}" style="width: 400px; height: 300px;"></a>
            <br><br><br>
            <h3 class="pproduk  pform">Harga </h3>
            <h4 class="pform">Rp. {{$produk->harga}}</h4>
            <h3 class="pproduk">Deskripsi</h3>
            <p>{{$produk->deskripsi}}</p>
                <h3 class="pproduk">Stock produk</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">{{$produk->stock}}</div>
                  </div>
        </div> 
      </div>

 

      <div class="col-lg-6 col-md-3 col-sm-5 col-8">
        <div class="menu-produk shadow-lg">
            <form action="{{url('pesan')}}/{{$produk->id}}" method="POST">
            <div class="input-group flex-nowrap input-group mb-3 ">

                <span class="input-group-text" id="addon-wrapping">Jumlah</span>
                <input type="text" class="form-control" id="jumlah"  name="jumlah_pesanan">
            </div>
              <button name="submit_form" class="btn btn-success" role="button" >Masukan Keranjang</button>
             
            </form>

        </div> 
      </div>
      
    </div>
  </div>

  <div class="pbeli container shadow-lg">
    <p>Produk lainnya</p>
   </div>

  <!-- produk lainnya -->