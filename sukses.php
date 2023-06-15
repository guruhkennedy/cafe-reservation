<?php
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jaskoffie - Beranda</title>
        <link rel="icon" type="image/x-icon" href="image/logo.jpg" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="cs1/rome.css">

    <!-- Bootstrap CSS -->

    </head>
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
        <header class="py-5 bg-image-full" style="background-image: url('./image/ylw.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="image/logo.jpg" width="200" height="200"alt="..." />
                <br><br><h1 class="text-white fs-3 fw-bolder">Reservasi - Jaskoffie</h1>
                <p class="text-white fs-3 fw-bolder"></p>
            
            </div>
        </header>
        <!-- About section-->
    
         <!-- Gallery item -->
  <div class="container-fluid">
  <div class="px-lg-4">

    <link rel="stylesheet" href="cs1/a11.css">

    <link rel="stylesheet" href="cs1/2b.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cs1/1b.css">
    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg 12 mx-auto">
      </div>
    </div>

<body>
<center><br><br><h1 class="alert alert-success d-flex align-items-center" role="alert"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>Terima kasih, Reservasi berhasil!</h1>
    <?php
    $sql = "SELECT * FROM tb_reservasi WHERE id=" . $_GET['id'];
    $query = $koneksi->query($sql);
    $row   = $query->fetch_array();
    ?>
    <div class="card">
  <div class="card-header">
    Detail Reservasi
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Kode Reservasi :  <b><?= $row['kode'] ?></b></p>
    <p class="card-text">Email :  <?= $row['nama'] ?></p>
    <p class="card-text">Email :  <?= $row['email'] ?></p>
    <p class="card-text">No Telfon :  <?= $row['telp'] ?></p>
    <p class="card-text">Tanggal Reservasi :  <?= $row['tanggal'] ?></p>
    <a href="invoice.php?id=<?php echo $_GET['id'] ?>">
                <p class="card-text">Download Invoice</p>

  </div>
</div>
</body>
<br><br><div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <h1>Menu Rekomendasi</h1>
  
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="image/cc.jpg"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h3 class="card-title">Cappucino</h3>
                <p class="card-text">
              Komponen isi dari Cappucino terdiri atas sepertiga shot espresso, sepertiga susu panas, dan sepertiga busa susu.
                </p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="image/ss.jpg"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h3 class="card-title">Sandwich Rereongan</h3>
                <p class="card-text">
                Kenapa Namanya Sandwich Rereongan? Karena Cocok buat nemenin curcol kelakuan bos-bos kalian yang penuh kegokilan.
                </p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="image/rv.jpg"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h3 class="card-title">Red Velvet</h3>
                <p class="card-text">
                Cocok buat ngademin hati kalian pas siang hari!
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
   
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
          </div>
        </div>
      </div>
</section>
      <!-- End -->

      <!-- Gallery item -->
      
      <!-- End -->
      <!-- End -->

        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-2">
                <div class="row gx-2 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Lokasi</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3327088779556!2d107.61253051477247!3d-6.850662495049173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e770f6f1d3fb%3A0xf44929988eb915fd!2sJaskoffie%20-%20Punclut!5e0!3m2!1sen!2sid!4v1646502974902!5m2!1sen!2sid" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        
                        <p class="lead"></p>
                    </div>
                </div>
                        </div>
        
        <!-- Contact section-->
        </div>
                </div>
            </div>
                       
                    </div>
                </div>
            </div>
        </section>
       
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
    </body>
</html>

</html>