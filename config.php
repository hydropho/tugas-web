<?php
  $conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
  if (mysqli_connect_error()){
    echo "Database gagal dihubungkan!";
  }

  $sql = "SELECT * FROM mahasiswa";
  $mahasiswa = mysqli_query($conn, $sql);
?>