<?php
  include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Poltek GT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.9.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">Poltek GT</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#mahasiswa">Mahasiswa</a></li>
          <li><a class="nav-link scrollto" href="#tambah_data">Tambah Data</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Politeknik Gajah Tunggal</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Lorem ipsum, dolor sit amet consectetur adipisicing.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#mahasiswa" class="btn-get-started scrollto">Data Mahasiswa</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="mahasiswa" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Data Mahasiswa</h2>
        </div>

        <table align="center" style="height: 100px; width: 800px; text-align:center; border: 1px solid black;">
          <thead>
            <tr style="border: 1px solid black;">
              <th style="width:100px; border: 1px solid black;">NIM</th>
              <th style="width:200px; border: 1px solid black;">Nama</th>
              <th style="width:150px; border: 1px solid black;">Jurusan</th>
              <th style="width:150px; border: 1px solid black;">Aksi</th>
            </tr>
          </thead>
          <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
              <td style="border: 1px solid black;">
                <?= $mhs['nim'] ?>
              </td>
              <td style="border: 1px solid black;">
                <?= $mhs['nama_lengkap'] ?>
              </td>
              <td style="border: 1px solid black;">
                <?= $mhs['jurusan'] ?>
              </td>
              <td style="border: 1px solid black;">
                  <a href="form-ubah.php?nim=<?=$mhs['nim']?>">Ubah</a>
                  |
                  <a href="proses-hapus.php?nim=<?=$mhs['nim']?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="tambah_data" class="contact">
      <div class="container" align="center">
        
        <div class="section-title" data-aos="fade-up">
          <h2>Tambah Data</h2>
        </div>

      <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="proses-daftar.php" method="post" role="form">
              <div class="form-group" style="width:700px">
                <input type="number" name="nim" class="form-control"  id="nim" placeholder="NIM" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="nama_lengkap" id="name" placeholder="Nama" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="tempat_lahir" id="name" placeholder="Tempat Lahir" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="date" class="form-control" name="tanggal_lahir" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="jurusan" id="name" placeholder="Jurusan" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="number" class="form-control" name="no_hp" id="name" placeholder="No HP" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group" style="width:700px">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit" value="submit">Daftar</button></div>
            </form>
          </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="portfolio" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($mahasiswa as $mhs) : ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3><?= $mhs['nama_lengkap'];?></h3>
                  <h4><?= $mhs['jurusan'];?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $mhs['alamat'];?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>  

      </div>
    </section><!-- End Testimonials Section -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>