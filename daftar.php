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
    

    $result = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim = '$nim'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert ('NIM tidak boleh sama!')</script>";
        echo "<script> window.location.href = 'index.php';</script>";
    }

    mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('$nim', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jurusan', '$no_hp', '$email')");
        if ( mysqli_affected_rows($conn) > 0){
            echo "<script> alert ('Kamu berhasil mendaftar!');</script>";
            echo "<script> window.location.href = 'index.php';</script>";
        } else {
            echo mysqli_error($conn);
        }
}
?>