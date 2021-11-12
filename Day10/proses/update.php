<?php
    require_once('../config.php');

    // tangkap input user
    $id = $_GET['nim'];
    $NIM = $_POST['NIM'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_univ = $_POST['id_univ'];

    $queryInput = "UPDATE mahasiswa SET NIM='$NIM', nama_mahasiswa='$nama_mahasiswa', 
    tgl_lahir='$tgl_lahir', username='$username', email='$email', password='$password', 
    id_univ='$id_univ' WHERE nim=$id";

    print_r ($queryInput);
    if ($queryInput = mysqli_query($koneksi, $queryInput)) {
        header('location: ../index.php?status=updateSuccess'); 
    } else {
        # code...
        header('location: ../index.php?status=updateError'); 
    }
?>