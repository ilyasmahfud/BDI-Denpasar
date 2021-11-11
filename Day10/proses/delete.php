<?php
    require_once('../config.php');

    // tangkap input user
    $id = $_GET['nim'];

    $queryInput = "DELETE FROM mahasiswa WHERE nim=$id";

    print_r ($queryInput);
    if ($queryInput = mysqli_query($koneksi, $queryInput)) {
        header('location: ../index.php?status=deleteSuccess'); 
    } else {
        # code...
        header('location: ../index.php?status=deleteError'); 
    }
?>