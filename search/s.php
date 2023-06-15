<!DOCTYPE html>
<html lang="en">
<head>
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

                        <div class="row">
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>