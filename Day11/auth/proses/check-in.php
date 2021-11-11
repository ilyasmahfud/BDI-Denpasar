<?php
require_once('../../config.php');

// tangkap input user
// $id = $_POST['id'];
// $NIM = $_POST['NIM'];
// $nama_mahasiswa = $_POST['nama_mahasiswa'];
// $tgl_lahir = $_POST['tgl_lahir'];
$username = $_POST['username'];
// $email = $_POST['email'];
$password = $_POST['password'];
// $id_univ = $_POST['id_univ'];

// $queryInput = "INSERT INTO mahasiswa ( NIM, nama_mahasiswa, tgl_lahir, username, email, password, id_univ) VALUES ( '$NIM', '$nama_mahasiswa', '$tgl_lahir', '$username', '$email', '$password', '$id_univ');";

$queryCekUsername = "SELECT username FROM mahasiswa WHERE username LIKE '$username' AND `password` = '$password'";
// $queryCekPassword = "SELECT password FROM mahasiswa WHERE password LIKE '$username'";
$cekUsername = mysqli_query($koneksi, $queryCekUsername);
// $cekPassword = mysqli_query($koneksi, $queryCekPassword);



if (!empty($cekUsername->{'num_rows'})) {
    header('location: ../../home.php?status=username_terdaftar?username=' . $username);
    // } elseif ($queryInput = mysqli_query($koneksi, $queryInput)) {
    //         header('location: ../index.php?status=success' . $NIM);
} else {
    # code...
    header('location: ../login.php?status=username_tidak_terdaftar');
}
