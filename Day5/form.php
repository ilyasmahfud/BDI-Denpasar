<?php
    $name = $_POST['name'];
    $nilai = $_POST['nilai'];

    echo "Haloo $name ";
    echo "<br>";
    if ($nilai > 100){
        echo "Input nilai antum melebihi 100 hey!";
    } elseif ($nilai > 86 && $nilai <=100) {
        echo "Nilai antum A";
    } elseif ($nilai > 76 && $nilai <85){
        echo "Nilai antum B";
    } elseif ($nilai > 51 && $nilai <75){
        echo "Nilai antum C";
    } elseif ($nilai > 31 && $nilai <50){
        echo "Nilai antum D";
    } elseif ($nilai >= 0 && $nilai <30){
        echo "Nilai antum E";
    } else {
        echo "Antum salah input nilai Heyy";
    }

    $alas = (int)$_POST['alas'];
    $tinggi = (int)$_POST['tinggi'];
    $jari_jari = (int)$_POST['jari_jari'];
    $sisi1 = (int)$_POST['sisi1'];
    $sisi2 = (int)$_POST['sisi2'];

    // Luas segitiga
    $luasSegitiga = (1/2) * $alas * $tinggi;
    echo "<br>";
    echo "Luas segitiga adalah ". $luasSegitiga;

    // Luas persegi panjang
    $luas_persegi_panjang = $sisi1 * $sisi2;
    echo "<br>";
    echo "Luas persegi panjang adalah ". $luas_persegi_panjang;

    // Luas lingkaran
    $luas_lingkaran = 22/7* ($jari_jari)^2;
    echo "<br>";
    echo "Luas lingkaran adalah ". $luas_lingkaran;

    // Luas lingkaran
    $keliling_lingkaran = 22/7* 2 * ($jari_jari);
    echo "<br>";
    echo "Keliling lingkaran adalah ". $keliling_lingkaran;
?>