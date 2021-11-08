<?php
    // BASIC
    echo "<h1>ARRAY</h1>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";

    // ACCES ARRAY
    echo "<h1>ACCES ARRAY</h1>";
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // Associative Arrays
    echo "<h1>Associative Arrays</h1>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old."."<br>";

    echo "<h1>ACCES Associative Arrays</h1>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
        
    // Multidimensional Arrays
    echo "<h1>Multidimensional Arrays</h1>";
    $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

    echo "<h1>Access Multidimensional Arrays</h1>";
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    // Tugas
    /*
        Buatlah array untuk menyimpan data kota dan kabupaten di Bali
    */

    echo "<h1>TUGAS 1</h1>";

    $kabupate_kota_di_Bali = array(
        array('Bandung','Mangapura','I Nyoman Giri Prasta'),
        array('Bangli','Bangli','Sang Nyoman Sedana Arta'),
        array('Buleleng','Singaraja','Putu Agus Suradnyana'),
        array('Gianyar','Gianyar','I Made Agus Mahayastra'),
        array('Jembrana','Negara','I Nengah Tamba'),
        array('Karangasem','Amplpura','I Gede Dana'),
        array('Klungkung','Semarapura','I Nyiman Suwirta'),
        array('Tabanan','Tabanan','I Komang Gede Sanjaya'),
        array('Denpasar','-','I Gusti Ngurah Jaya Negara')
    );

    $maks = count($kabupate_kota_di_Bali);

    echo "<h1>array untuk menyimpan data kota dan kabupaten di Bali</h1>";
    for ($row = 0; $row < $maks; $row++) {
        for ($col = 0; $col < 1; $col++) {
            echo "<p><b>Kabupaten atau kota ".$kabupate_kota_di_Bali[$row][$col]."</b></li>";
            echo "<ul>";
            for ($col = 1; $col < 2; $col++) {
                echo "<li> Pusat pemerintahan : ".$kabupate_kota_di_Bali[$row][$col]."</li>";
                for ($col = 2; $col < 3; $col++) {
                    echo "<li> Bupati/Walikota : ".$kabupate_kota_di_Bali[$row][$col]."</li>";
                    break;
                }
            }
            echo "</ul>";
        }
    }

    // Tugas
    /*
        Buatlah sebuah objek yang berisi data provinsi bali (Nama, ibukota, website, gubernur, wakil gubernur)
    */

    echo "<h1>TUGAS 2</h1>";
    echo "<p>Membuat Object data provinsi Bali</p>";
    
    $provinsi = array(
            'Nama' => 'Bali', 
            'Ibukota' => 'Denpasar',
            'Website' => 'https://www.baliprov.go.id/',
            'Gubernur' => 'Wayan Koster',
            'Wakil Gubernur' => 'Tjokorda Oka Artha Ardana Sukawati'
    );
    $data_provinsi = json_encode($provinsi);
    echo $data_provinsi;

    echo "<br>";

    $data_negara = array();

    array_push($data_negara,$provinsi);

    echo json_encode($data_negara);

    // Tugas
    /*
        Mengakses data nomer 2
    */

    echo "<h1>TUGAS 3</h1>";
    echo "<p>Mengakses data ibu kota pada nomor 2</p>";

    echo $data_negara[0]['Ibukota'];
    echo $provinsi['Ibukota'];

    echo "<h1>TUGAS 4</h1>";
    echo "<p>Function pengurangan</p>";

    function pengurangan(int$a, int$b) {
        return $a-$b;
    }

    echo pengurangan(3,2);

    echo "<h1>TUGAS 5</h1>";
    echo "<p>Function gabung string</p>";

    function gabungString(string$a, string$b) {
        return $a.$b;
    }

    echo gabungString('aku','ilyas');
?>