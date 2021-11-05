<?php
    echo "Selamat belajar PHP dasar";
    // Proses assignment
    $a = 10;
    $b = 6;

    // Proses aritmatika
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $modulo = $a % $b;
    $boolean = $a < $b ? "true" : "false";
    
    // proses output
    echo "<br>";
    echo "Penjumlahan : ". $a . "+" . $b . "=". $penjumlahan;
    echo "<br>";
    echo "Pengurangan : ". $a . "-" . $b . "=". $pengurangan;
    echo "<br>";
    echo "Perkalian : ". $a . "*" . $b . "=". $perkalian;
    echo "<br>";
    echo "Pembagian : ". $a . "/" . $b . "=". $pembagian;
    echo "<br>";
    echo "Modulo : ". $a . " mod " . $b . "=". $modulo;
    echo "<br>";
    echo "Boolean : ". $a . " < " . $b . "=". $boolean;

    // $alas = 6;
    // $tinggi = 10;
    // $jariJari = 14;
    // $sisi1 = 5;
    // $sisi2 = 10;
    
    echo "<br>";
    echo "<br>";
    echo "TUGAS Operator";
    echo "<br>";
    echo "alas = " . $alas = 6;
    echo "<br>";
    echo "tinggi = " .$tinggi = 10;
    echo "<br>";
    echo "jari-jari = " .$jariJari = 14;
    echo "<br>";
    echo "sisi1 = " .$sisi1 = 5;
    echo "<br>";
    echo "sisi2 = " .$sisi2 = 10;

    // Luas segitiga
    $luasSegitiga = (1/2) * $alas * $tinggi;
    echo "<br>";
    echo "Luas segitiga adalah ". $luasSegitiga;

    // Luas persegi panjang
    $luas_persegi_panjang = $sisi1 * $sisi2;
    echo "<br>";
    echo "Luas persegi panjang adalah ". $luas_persegi_panjang;

    // Luas lingkaran
    $luas_lingkaran = 22/7* ($jariJari)^2;
    echo "<br>";
    echo "Luas lingkaran adalah ". $luas_lingkaran;

    // Luas lingkaran
    $keliling_lingkaran = 22/7* 2 * ($jariJari);
    echo "<br>";
    echo "Keliling lingkaran adalah ". $keliling_lingkaran;

    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "TUGAS ELSE IF";
    echo"<br>";
    echo "Nilai = ".$nilai =90;
    echo"<br>";
    if ($nilai > 100){
        echo "Input nilai antum melebihi 100 hey!";
    } elseif ($nilai > 86 && $nilai <100) {
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

    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "TUGAS SWITCH CASE";
    echo"<br>";
    echo "Nilai = ".$nilai =110;
    echo"<br>";
    switch ($nilai) {
        case ($nilai >100):
          echo "input nilai antum kebanyakan hey";
          break;
        case ($nilai > 86) && ($nilai <100):
          echo "Nilai antum A";
          break;
        case ($nilai > 76) && ($nilai <85):
          echo "Nilai antum B";
          break;
        case ($nilai > 51) && ($nilai <75):
            echo "Nilai antum C";
            break;
        case ($nilai > 31) && ($nilai <50):
            echo "Nilai antum D";
            break;
        case ($nilai >= 0) && ($nilai <30):
            echo "Nilai antum E";
            break;
        default:
          echo "Antum salah input nilai Heyy";
      }
?>
