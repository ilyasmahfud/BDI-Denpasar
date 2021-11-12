<?php
    require_once('../config.php');

    // tangkap input user
    // $id = $_POST['id'];
    $NIM = $_POST['NIM'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_univ = $_POST['id_univ'];

    $queryInput = "INSERT INTO mahasiswa ( NIM, nama_mahasiswa, tgl_lahir, username, email, password, id_univ) VALUES ( '$NIM', '$nama_mahasiswa', '$tgl_lahir', '$username', '$email', '$password', '$id_univ');";

    $queryCekId = "SELECT NIM FROM mahasiswa WHERE NIM LIKE '$NIM'";
    $cekId = mysqli_query($koneksi , $queryCekId);

    // print_r ($cekId);
    // echo $cekId->{'num_rows'};
    // $hasil = $cekId['num_rows'];
    //  ($hasil);


    if (!empty($cekId->{'num_rows'})) {
        header('location: ../index.php?status=NIM_sudah_ada'); 
    } else
    if ($queryInput = mysqli_query($koneksi, $queryInput)) {
        header('location: ../index.php?status=success'); 
    } else {
        # code...
        header('location: ../index.php?status=error'); 
    }
?> 
	