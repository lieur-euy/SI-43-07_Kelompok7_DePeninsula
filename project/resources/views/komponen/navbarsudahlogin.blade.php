<!--  navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="#" ><img src="./src/logo.png" style="width: 10%;"> </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('produk')}}">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
  
  
        </ul>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="{{url('check-out')}}">  <i class="material-icons" style="font-size:30px;color:rgb(41, 43, 41);">shopping_cart</i></a>

            <br>
            <p> Hallo {{$user->name}}</p>
            <br>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
          <button type="submit" class="btn btn-danger" data-bs-whatever="@mdo">LOGOUT</button>
        </form>
      </div>
    </div>
    </div>
  </nav>
  