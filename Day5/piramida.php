<?php

// piramida 2
// function piramida ($batas){
//     echo "<pre>";
//     for($i=1; $i<$batas; $i++){
//         $spasi = str_repeat("0", $batas-$i);
//         $bintang = str_repeat("1", ($i-1)*2+1);
//         echo $spasi.$bintang."0<br>";
//     }
//     echo "</pre>";
// }
 
// piramida(4);
// piramida 3
// echo "<pre>";
// for($i=1; $i<4; $i++){
//     $spasi = str_repeat(" ", 5-$i);
//     $bintang = str_repeat("1", ($i-1)*2+1);
//     echo $spasi.$bintang."<br>";
// }
// echo "</pre>";



// $x = 1;
// $y = 7;
// $z = 1;
// for($x=$x;$x<$y;$x++)
// {
//     for($z=1;$z<=$x;$z++)
//     {
//         $tampil = $x;
//         echo $tampil;
//     }
//     // Tambahkan enter
//     echo "<BR>";
// }
     



for ($x = 1; $x <= 4; $x++)
{
    if ($x==3) {
        echo "1";
    }
    echo "0";
}
echo "<br>";

for ($x = 1; $x <= 3; $x++)
{
    if ($x==2||$x==3) {
        echo "1";
    }
    echo "0";
}
echo "<br>";

for ($x = 1; $x <= 3; $x++)
{
    if ($x==1|| $x==2 ||$x==3) {
        echo "1";
    }
    if ($x==1 || $x==2) {
        echo "0";
    }
}
?>
