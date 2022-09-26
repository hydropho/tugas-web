<?php
include ('config.php');
    global $conn;
    $nim = $_GET['nim'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$nim'");

    
    if ( mysqli_affected_rows($conn) > 0){
        echo "<script> alert ('Data berhasil dihapus!');</script>";
        echo "<script> window.location.href = 'index.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
?>