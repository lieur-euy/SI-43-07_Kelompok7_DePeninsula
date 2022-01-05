<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DePeninsula</title>
      
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap');
  body {
      background-color:rgb(235, 235, 235);
    }
  .navcss{
    background-color: rgb(8, 192, 69);
  
  }
  
  .pbeli{
      background-color: rgb(255, 255, 255);
      text-align: center;
      width: auto;
      margin: 1rem auto;
      padding: 1rem;
      border-radius: 10px;
      font-weight: bold;
      font-family: 'Roboto Mono', monospace;
  }
  .container-kategori{
    border-radius: 10px;
  }
  .menu-kategori{
    margin: 1rem auto;
    padding: 1rem;
    border-radius: 10px;
  }
  .menu-produk{
    margin: 1rem auto;
    padding: 2rem;
    border-radius: 10px;
  }
  .divc{
      border-radius: 10px;
  }
  .pproduk{
    text-align: left;
    font-weight: bold;
  }
  .footer1{
    background-color: white;
    text-align: center;
    padding: 1rem auto;
  }
  .linkfooter{
    text-align: center;
  }
  .maps{
    text-align: center;
  }
  
  </style>
  </head>
  <body>
      @include('komponen.navbar')
      
    <div class="container shadow-lg bg-light">
        @yield('content')

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <br><br>
  @include('komponen.footer')
</html>