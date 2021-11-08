<?php
    include('typedata.php');

    $mahasiswa = new Mahasiswa();

    $mahasiswa->setName('Ilyas');
    echo $mahasiswa->getName();
?>