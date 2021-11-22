<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <title>Perhitungan</title>
</head>

<body>
  <!-- INI HEADER -->
  <header>
    <div class="m-4">
      <center>
        <h3>Menghitung Luas Bangun Datar </h3>
        <hr>
        <h6>pilih gambar</h6>
      </center>
    </div>
  </header>

  <!-- INI BODY -->
  <main class="main mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <center>
            <a href="views/segitiga.php">
              <img src="assets/img/Polygon 1.png" alt="">
            </a>
          </center>
        </div>
        <div class="col-md-4">
          <center>
            <a href="views/persegi.php">
              <img src="assets/img/Rectangle 1.png" alt="">
            </a>
          </center>
        </div>
        <div class="col-md-4">
          <center>
            <a href="views/lingkaran.php">
              <img src="assets/img/Ellipse 1.png" alt="">
            </a>
          </center>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <hr>
          <h6 align="center">Statistik perhitungan</h6>
          <hr>
        </div>
        <div class="col-md-2"></div>
      </div>
      <?php

      // Mengecek dan membuka file 
      if (($open = fopen("hasil.csv", "r")) !== FALSE) {

        // definisi variable
        $array = array();
        $max = 0;
        $min = 0;
        $total = 0;
        $persegi = 0;
        $segitiga = 0;
        $lingkaran = 0;
        $i = 0;


        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
          $array[] = $data;
          if ($data['6'] >= $max) {
            $max = $data['6'];
          }
          if ($data['6'] <= $min || $i == 0) {
            $min = $data['6'];
          }
          $total += $data['6'];
          if ($data['1'] == 'Persegi') {
            $persegi += $data['6'];
          }
          if ($data['1'] == 'Segitiga') {
            $segitiga += $data['6'];
          }
          if ($data['1'] == 'Lingkaran') {
            $lingkaran += $data['6'];
          }
          $i++;
        }
        fclose($open);

        // handle jika data masih kosong
        $persen_persegi = ($persegi > 0) ? number_format((($persegi / $total) * 100), 2) : 0;
        $persen_segitiga = ($segitiga > 0) ? number_format((($segitiga / $total) * 100), 2) : 0;
        $persen_lingkaran = ($lingkaran > 0) ? number_format((($lingkaran / $total) * 100), 2) : 0;
      }
      echo "<pre>";
      //To display array data
      // var_dump($array);
      echo "</pre>";
      ?>
      <div class="row">
        <div class="col-4">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Total Perhitungan</h4>
            <hr>
            <p class="mb-0"><?= count($array) ?></p>
          </div>
        </div>
        <div class="col-4">
          <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Nilai Maksimum</h4>
            <hr>
            <p class="mb-0"><?= $max; ?></p>
          </div>
        </div>
        <div class="col-4">
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Nilai Minimum</h4>
            <hr>
            <p class="mb-0"><?= $min; ?></p>
          </div>
        </div>
        <div class="col-4">
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Persentase Persegi</h4>
            <hr>
            <p class="mb-0"><?= $persen_persegi; ?> %</p>
          </div>
        </div>
        <div class="col-4">
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Persentase Segitiga</h4>
            <hr>
            <p class="mb-0"><?= $persen_segitiga; ?> %</p>
          </div>
        </div>
        <div class="col-4">
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Persentase Lingkaran</h4>
            <hr>
            <p class="mb-0"><?= $persen_lingkaran; ?> %</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>