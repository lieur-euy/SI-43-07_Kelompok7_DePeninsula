@extends('layout.layout')

   
<div class="container-kategori container bg-white shadow-lg">
    <div class=" row text-center">
      <div class="col-lg-6 col-md-3 col-sm-5 col-8">
        <div class="menu-produk shadow-lg">
            <h3 class="pproduk"><?= $selectproduk['nama'] ?></h3>
            <a href="#"> <img src="../gambarproduk/<?= $selectproduk['img'] ?>" style="width: 400px; height: 300px;"></a>
            <br><br><br>
            <h3 class="pproduk  pform">Harga </h3>
            <h4 class="pform">Rp. <?= $selectproduk['harga'] ?></h4>
            <h3 class="pproduk">Deskripsi</h3>
            <p><?= $selectproduk['deskripsi'] ?></p>
                <h3 class="pproduk">Stock produk</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?= $selectproduk['stock'] ?></div>
                  </div>
        </div> 
      </div>

      <?php
if(isset($_POST['submit_form'])) {
    $jumlah = $_POST['jumlah'];
    header("location: beli_keranjang.php?jumlah=$jumlah&id=$id");
}
?>

      <div class="col-lg-6 col-md-3 col-sm-5 col-8">
        <div class="menu-produk shadow-lg">
            <form action="" method="POST">
            <div class="input-group flex-nowrap input-group mb-3 ">

                <input type="hidden" class="form-control" placeholder="Username" aria-label="id pelanggan" aria-describedby="addon-wrapping">
              </div>

              <div class="input-group flex-nowrap input-group mb-3 ">
                <span class="input-group-text" id="addon-wrapping">Jumlah</span>
                <input type="text" class="form-control" id="jumlah" onchange="total()" name="jumlah">

                <input type="hidden" class="form-control"  name="id_produk" value="<?= $selectproduk['id'] ?>">
              
              </div>
              <h5>Total Harga Rp. <input type="text " class="color-light"  id="hasilnya" name="harga" disabled></h5>
              <div class="bg-wite pform">
              
                <?php 
                ?>
              </div>
              <input type="hidden" class="form-control"  name="hidden_id" value="<?= $selectproduk['id'] ?>">
              <button name="submit_form" class="btn btn-success" role="button" >Masukan Keranjang</button>
              <script type="text/javascript">
                function total() {
                  var jumlah = document.getElementById('jumlah').value ;

                  var grand_total= jumlah * <?= $selectproduk['harga']?>;
                  document.getElementById('hasilnya').value = grand_total;
                  }

                </script>
            </form>

        </div> 
      </div>
      
    </div>
  </div>

  <div class="pbeli container shadow-lg">
    <p>Produk lainnya</p>
   </div>

  <!-- produk lainnya -->