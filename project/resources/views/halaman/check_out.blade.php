@extends('layout.layout')
<br><br><br><br>

<div class="container container-kategori bg-LIGHT text-DARK p-5 shadow">
    <h1 class="display-4">pilih produk</h1>
  <br>
  <div class="container-kategori container bg-white shadow-lg">
    <div class=" row text-center">

          
     
      <div class=" container-fluid">
        <div class=" menu-produk shadow-lg">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">id barang</th>
                    <th scope="col">berapa</th>
                    <th scope="col">total jumlah</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($pesanan_deetail as $detail)
                        

                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$detail->barang_id}}</td>
                    <td>{{$detail->jumnlah}}</td>
                    <td>Rp. {{$detail->jumnlah_harga}}</td>
                    <td> 
                        <form action="{{url('check-out')}}/{{$detail->id}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-DANGER">HAPUS</button>

                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <button class="btn btn-success">check out</button>
        </div> 
      </div>


  </div>

