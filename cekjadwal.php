<?php

$tanggal = $_POST['tgl'];
$jam = array("10:00", "12:00", "14:00", "16:00", "18:00", "20:00", "22:00",);

?>

<?php
require_once('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Reservasi - Jaskoffie</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="cs1/rome.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cs1/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="cs1/style.css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="index.php">Reservation</a>
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
    </nav>
    <!-- Header-->
    <header class="py-5 bg-image-full" style="background-image: url('./image/1.jpg')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="image/logo.jpg" width="200" height="200" alt="..." />
            <br><br><h1 class="text-white fs-3 fw-bolder">Reservasi - Jaskoffie</h1>
                <p class="text-white fs-3 fw-bolder"></p>
        </div>
    </header>
    <!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <form method="post" action="cekjadwal.php">
                        <?php
                        // var_dump($datapinjam);
                        $i = 0;
                        foreach ($jam as $j) : ?>
                            <?php $fulltglawal = $tanggal . ' ' . $jam[$i] ?>
                            <?php
                            $sql = 'SELECT * FROM tb_reservasi WHERE "' . $fulltglawal . '" BETWEEN jam_mulai AND DATE_ADD(jam_selesai,interval -1 hour)';
                            $query = $koneksi->query($sql);
                            $cek = $query->num_rows;
                            if ($cek == 1) {
                                $className = "btn btn-danger";
                                $disabled = "disabled";
                            } else {
                                $className = "btn btn-success";
                                $disabled = "";
                            }
                            ?>
                            <button type="button" class="<?= $className ?> my_button" <?= $disabled ?>><?= $j ?></button>
                        <?php $i++;
                        endforeach ?>

                    </form>
<br>
                    <div id="form-div">
                        <form method="post" action="inputContoh.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Kamu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Kamu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Nomor Telfon / Whatsapp</label>
                                <input type="number" class="form-control" id="telp" name="telp" aria-describedby="emailHelp" placeholder="Nomor telfon" required>
                            </div>
                            <div class="form-group">
                                <label for="input_from">*Tanggal</label>
                                <input type="text" class="form-control" value="<?= $tanggal ?>" id="tgl" name="tgl" aria-describedby="emailHelp" placeholder="Tanggal" required readonly>
                            </div>

                            <div class="form-group">
                                <label for="input_from">*Jam</label>
                                <input type="text" class="form-control" id="jam" name="jam" aria-describedby="emailHelp" placeholder="Tanggal" required readonly>
                            </div>

                            <input type="hidden" class="form-control" id="jam_mulai" name="jam_mulai" aria-describedby="emailHelp" placeholder="Tanggal" required readonly>

                            <input type="hidden" class="form-control" id="jam_selesai" name="jam_selesai" aria-describedby="emailHelp" placeholder="Tanggal" required readonly>

                            <button type="submit" class="btn btn-primary">Reservasi Sekarang</button>
                        </form>
                      
                    </div>
                    <br>
                    <p class="text-black text-left">*Untuk melanjutkan reservasi silahkan klik tombol pada jam yang tersedia / berwarna hijau</p>
                    <p class="text-black text-left">*Silahkan isi semua data yang diperlukan</p>
                    <p class="text-black text-left">*Durasi reservasi adalah 2 jam per reservasi</p>
                    <p class="text-black text-left">*Mohon dicek ulang tentang tanggal dan jam yang kamu pilih</p>
                    <script src="js1/jquery-3.3.1.min.js"></script>
                    <script src="js1/popper.min.js"></script>
                    <script src="js1/bootstrap.min.js"></script>
                    <script src="js1/rome.js"></script>

                    <script src="js1/main.js"></script>
                    <script type="text/javascript">
                        function addHours(date, hours) {
                            const newDate = new Date(date);
                            newDate.setHours(newDate.getHours() + hours);
                            return newDate.toISOString();
                        }

                        function getJam(date) {
                            const newDate = new Date(date);
                            var hr = newDate.getHours();
                            let minutes = newDate.getMinutes();
                            minutes = minutes <= 9 ? '0' + minutes : minutes;
                            return hr + ':' + minutes;
                        }

                        function getFullTgl(dates) {
                            let date = new Date(dates);
                            let year = date.getFullYear();
                            let month = date.getMonth() + 1;
                            let dt = date.getDate();

                            if (dt < 10) {
                                dt = '0' + dt;
                            }
                            if (month < 10) {
                                month = '0' + month;
                            }

                            var hr = date.getHours();
                            let minutes = date.getMinutes();
                            minutes = minutes <= 9 ? '0' + minutes : minutes;

                            // console.log(year + '-' + month + '-' + dt + ' ' + hr + ':' + minutes)

                            return year + '-' + month + '-' + dt + ' ' + hr + ':' + minutes
                        }

                        $(document).ready(function() {
                            $("#form-div").hide();

                            $('.my_button').click(function() {
                                $("#form-div").show();
                                let tgl = $('#tgl').val()
                                let jam = $(this).html();
                                var dt = new Date(tgl + ' ' + jam);
                                var js = addHours(dt, 2)

                                var jam_mulai = addHours(dt, 0);
                                var jam_selesai = addHours(dt, 2)
                                // alert(getFullTgl(jam_mulai))

                                $('#jam').val(jam + ' - ' + getJam(js));
                                $('#jam_mulai').val(getFullTgl(jam_mulai));
                                $('#jam_selesai').val(getFullTgl(jam_selesai));

                            });
                        });
                    </script>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>