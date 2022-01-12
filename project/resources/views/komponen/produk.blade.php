<div class="container container-kategori bg-LIGHT text-DARK p-5 shadow">
    <h1 class="display-4">pilih produk</h1>
  <br>
  <div class="container-kategori container bg-white shadow-lg">
    <div class=" row text-center">
      @foreach ($produk as $p)
          
     
      <div class="col-lg-3 col-md-3 col-sm-5 col-8">
        <div class="menu-produk shadow-lg">
            <a href="#"> <img src="{{url('src')}}/{{$p->img}}" style="width: 100px; height: 100px;"></a>
            <br><br><br>
            <p class="pproduk">{{$p->nama}}</p>
            <div class="footer d-grid gap-2 d-md-flex justify-content-md-end">
              <p class="pproduk">{{$p->harga}}</p>
              <a href="./beli.php?id" class="btn btn-success me-md-2" type="button">Beli</a>
          </div>
        </div> 
      </div>
      @endforeach

  </div>