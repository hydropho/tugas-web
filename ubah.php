<?php 
    include ('config.php');
    global $conn;

    $nim = $_GET['nim'];
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <section id="counts" class="contact">
      <div class="container">
        
        <div class="section-title" data-aos="fade-up">
          <h2>Ubah Data</h2>
        </div>

      <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="ganti.php" method="post" role="form">
              <div class="form-group">
                <input type="number" name="nim" class="form-control" id="nim" value="<?= $row['nim']?>" required readonly>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nama_lengkap" id="name" placeholder="Nama" value="<?= $row['nama_lengkap']?>" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="tempat_lahir" id="name" placeholder="Tempat Lahir" value="<?= $row['tempat_lahir']?>" required>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $row['tanggal_lahir']?>" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="jurusan" id="name" placeholder="Jurusan" value="<?= $row['jurusan']?>" required>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="no_hp" id="name" placeholder="No HP" value="<?= $row['no_hp']?>" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $row['email']?>" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required><?= $row['alamat']?></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div> -->
              <div class="text-center"><button type="submit" name="submit" value="submit">Ubah</button></div>
            </form>
          </div>

      </div>
    </section>
</body>
</html>