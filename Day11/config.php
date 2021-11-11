<?php
// inisiasi variable koneksi 
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','pembayaran_ukt');

// proses koneksi
$koneksi = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// cek koneksi 
if ($koneksi === false) {
    die("ERROR: tidak bisa konek dongg".mysqli_connect_error());
} else {
    echo "";
}
?>