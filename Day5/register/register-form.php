<?php
    // $data = $_POST;
    // print_r($data);
    
    // parse data from
    // $foto = $_POST['foto'];
    $name = $_POST['name'];
    $NIK = $_POST['NIK'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobilePhone = $_POST['mobilePhone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;
    $path = "images/".$fotobaru;
    $link_foto = $path;

    if (!move_uploaded_file($tmp, $path)) {
        # code...
        echo "Upload foto gagal";
    }


    include('user-profile.php');
?>