<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Hello, world!</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="coniner" id="app">

            <h3><i class="fas fa-mug-hot" mr-2></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">COFFEE SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="icon mt-2">
                    <h5>
                        <i class="fas fa-cart-plus ml-3 mr-3"></i>
                        <i class="fas fa-comment-dots mr-4"></i>
                        <i class="fas fa-bell mr-4"></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
                <li class="list-group-item bg-warning"><i class="fas fa-list"></i> PRODUK</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Classic</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Signature</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Fancy</li>
            </ul>
        </div>
        <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="slide5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



        <h4 class="text-center font-weight-bold m-4">PRODUK TERLARIS</h4>
        <div class="row">
            <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="kopi3.jpg" class="CLASSIC" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CLASSIC</h5>
                    <p class="card-text"> CAPUCINO LATTE (22.000)</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img src="kopi-panas.jpg" class=" CARAMEL LATTE" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Signature</h5>
                    <p class="card-text"> KOPI TUBRUK (20.000)</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>

            <div class="card me-2 ml-2" style="width: 16rem;">
                <img src="susu.jpeg" class=" LATTE" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fancy</h5>
                    <p class="card-text"> CARRAMEL LATTE (32.000)</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>

            <div class="card me-2 ml-2" style="width: 16rem;">
                <img src="kopii.jpg" class=" LATTE" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fancy</h5>
                    <p class="card-text"> MOCACINO (30.000)</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>
            <div class="card me-2 ml-2" style="width: 16rem;">
                <img src="es kopi.jpg" class=" LATTE" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fancy</h5>
                    <p class="card-text"> CARAMEL SUGAR (35.000)</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>


        </div>
    </div>
    <footer class="bg-dark text-white p-5">
        <div class="row">
            <div class="col-md-3">
                <h5>LAYANAN PELANGGAN</h5>
                <ul>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                    <li>Kritik dan Saran</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>TENTANG KAMI</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti rem ipsum accusantium, optio mollitia aliquid laborum debitis hic quia alias ex consectetur, excepturi dolorem eaque itaque ratione laudantium commodi perferendis?</p>
            </div>
            <div class="col-md-3">
                <h5>MITRA KERJA SAMA</h5>
                <ul>
                    <li>GOJEK</li>
                    <li>GRAB</li>
                    <li>MAXIM</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>HUBUNGI KAMI</h5>
                <ul>
                    <li>021-680</li>
                    <li>coffeeshop@gmail.com</li>

                </ul>
            </div>
        </div>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    
    -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>