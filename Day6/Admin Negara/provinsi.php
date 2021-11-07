<?php
    $nama = $_POST['nama_provinsi'];
    $ibu_kota = $_POST['ibu_kota'];
    $website = $_POST['website'];
    $gubernur = $_POST['gubernur'];
    $wakil_gubernur = $_POST['wakil_gubernur'];

    $provinsi = array (
        'nama' => $nama,
        'Ibu Kota' => $ibu_kota,
        'website' => $website,
        'gubernur' => $gubernur,
        'wakil_gubernur' => $wakil_gubernur
    );

    // $data_provinsi = json_encode($provinsi);

    // echo $data_provinsi;

    // $data_negara = array();

    // array_push($data_negara, $provinsi);

    // $data_negara = array(
    //     "data" => $provinsi,
    // );

    // if (isset($provinsi)) {
    //     array_push($data_negara, $provinsi);
    // }
    

    // $data = json_encode($provinsi);

    $data = json_encode($provinsi);

    echo $data;

    // include('data.php');

?>