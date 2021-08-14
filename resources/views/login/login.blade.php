<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- custom css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >

    <title>KIA Digital</title>
  </head>
  <body>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark mx-5">
            <div class="container-fluid d-flex ">
                <a class="navbar-brand me-auto" href="#"><img src="{{asset('asset/logo-kemenkes.png')}}" alt="" style="height:50px"></a>
                <!-- hamburger button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- end hamburger button -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success" href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->
        <!-- main content -->
        <div class="row">
            <div class="col">
                <div class="main-content">
                    <div class="row " style="">
                        <div class="col-md-7 text-center main-content-left">
                            <h1 style="margin-top: 20vh" class="green-kemenkes main-tittle">BUKU KIA DIGITAL<br>KESEHATAN IBU DAN ANAK</h1>
        
                            <img class="cover-image" src="{{asset('asset/kia-cover-image.svg')}}" alt="">
                        </div>
                        <div class="col-md-5 bg-pink">
                            <!-- <img id="bg-ornament-top" src="{{asset('asset/bg-ornament.svg')}}" alt=""> -->
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col">
                                    <h1 class="text-light login-form mx-3">MASUK</h1>
                                    <form action="">
                                        <div class="mb-3 mx-3">
                                            <label for="email" class="form-label text-light">Alamat Email</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <label for="password" class="form-label text-light">Password</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <div class="d-grid gap-2 mb-3 mt-5 mx-3">
                                            <button class="btn btn-green-kemenkes text-light shadow" type="submit">Button</button>
                                        </div>
                                        <div class="d-grid gap-2 mb-3 mx-3">
                                            <span class="text-dark mx-auto">Belum punya akun? <a class="text-light" href="#">DAFTAR</a></span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main content -->
    

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>