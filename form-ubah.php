<?php 
    include ('config.php');
    global $conn;

    $nim = $_GET['nim'];
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($data);
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

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="contact">
      <div class="container" align="center">
        
        <div class="section-title" data-aos="fade-up">
          <h2>Ubah Data</h2>
        </div>

      <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="proses-ganti.php" method="post" role="form">
              <div class="form-group" style="width:700px">
                <input type="number" name="nim" class="form-control"  id="nim" placeholder="NIM" required value="<?= $row['nim']?>">
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="nama_lengkap" id="name" placeholder="Nama" value="<?= $row['nama_lengkap']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="tempat_lahir" id="name" placeholder="Tempat Lahir" value="<?= $row['tempat_lahir']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $row['tanggal_lahir']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="text" class="form-control" name="jurusan" id="name" placeholder="Jurusan" value="<?= $row['jurusan']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="number" class="form-control" name="no_hp" id="name" placeholder="No HP" value="<?= $row['no_hp']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $row['email']?>" required>
              </div>
              <div class="form-group" style="width:700px">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required><?= $row['alamat']?></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit" value="submit">Ubah</button></div>
            </form>
            <div class="text-center"><a href="index.php"><button type="submit" name="kembali">Kembali</button></a></div>
          </div>

      </div>
    </section><!-- End Counts Section -->

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