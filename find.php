<!DOCTYPE html>
<html lang="en">
<head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="index.php">Beranda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="reservasi.php">Reservasi Tempat</a></li>
                        <li class="nav-item"><a class="nav-link" href="find.php">Cek Status Reservasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5 bg-image-full" style="background-image: url('./image/1.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="image/logo.jpg" width="200" height="200"alt="..." />
                <br><br><h1 class="text-white fs-3 fw-bolder">Selamat Datang Di Website Jaskoffie</h1>
                <p class="text-white fs-3 fw-bolder"></p>
            </div>
        </header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Reservasi - Jaskoffie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Cek Status Reservasi Kamu</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="kode" placeholder="masukan kode reservasi...." value="<?php if(isset($_GET['kode'])){echo $_GET['kode'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>

                        <div class="row ms-auto">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","admin111","admin111","reservasi");

                                    if(isset($_GET['kode']))
                                    {
                                        $kode = $_GET['kode'];

                                        $query = "SELECT * FROM tb_reservasi WHERE kode='$kode' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                               <div class="card" style="width: 18rem;">
											<ul class="list-group list-group-flush">
											<li class="list-group-item">Nama 	: <?= $row['nama']; ?></li>
											<li class="list-group-item">Kode 	: <?= $row['kode']; ?></li>
											<li class="list-group-item">Email 	: <?= $row['email']; ?></li>
											<li class="list-group-item">Tel 	: <?= $row['telp']; ?></li>
											<li class="list-group-item">Tanggal : <?= $row['jam_mulai']; ?></li>
											<li class="list-group-item">Status 	: Reserved</li>
										</ul>
										</div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "Reservasi Tidak Ditemukan";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <h3></h3>
          
        </footer>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>