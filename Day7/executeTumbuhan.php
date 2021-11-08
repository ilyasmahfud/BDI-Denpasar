<?php
    include('tumbuhan.php');

    $tumbuhan = new Tumbuhan();

    $tumbuhan -> berfotosintesis(true);
    $tumbuhan -> berbatang('kayu');
    $tumbuhan -> berdaun('menyirip');
    $tumbuhan -> berakar('tunggang');
    $tumbuhan -> berbungan(true);
    $tumbuhan -> berserbuk('putik');
    $tumbuhan -> berbuah(true);

    // print_r($tumbuhan->berfotosintesis());
    echo "<br>";
    print_r($tumbuhan->getData());
    echo "<br>";
    print_r($tumbuhan);
?>