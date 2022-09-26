<?php
include("config.php");
    if (isset($_POST['submit'])) {
    
    global $conn;

    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $sql = "UPDATE mahasiswa SET nim = '$nim', nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', jurusan = '$jurusan', no_hp = '$no_hp', email = '$email' WHERE nim = '$nim' ";
    $result = mysqli_query($conn, $sql);
    if ( $result ){
            echo "<script> alert ('Data berhasil diubah!');</script>";
            echo "<script> window.location.href = 'index.php';</script>";
        } else {
            echo mysqli_error($conn);
        }
}
?>