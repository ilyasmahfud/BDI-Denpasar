<?php    
    // Fungsi Menghitung Luas Segitiga
    function luasSegitiga($alas, $tinggi) {
        return 1/2 *  $alas * $tinggi;
    }

    // Fungsi Menghitung Luas Persegi
    function luasPersegi($sisi) {
        return $sisi*$sisi;
    }
    
    // Fungsi Menghitung Luas Lingkaran
    function luasLingkaran($jariJari) {
        return number_format(pi()* ($jariJari*$jariJari),2);
    }
    
?>