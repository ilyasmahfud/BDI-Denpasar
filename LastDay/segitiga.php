<?php
//index.php
include("../proses/prosesHitung.php");

reset_form();

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if (isset($_POST["submit"])) {
  if (empty($_POST["alas"])) {
    $error['alas'] = '<p><label class="text-danger">Slas wajib diisi</label></p>';
  } else {
    $alas = clean_text($_POST["alas"]);
  }

  if (empty($_POST["tinggi"])) {
    $error['tinggi'] = '<p><label class="text-danger">Tinggi wajib diisi</label></p>';
  } else {
    $tinggi = clean_text($_POST["tinggi"]);
  }

  // MEMASUKKAN DATA KE CSV
  if (empty($error['alas']) && empty($error['tinggi'])) {
    $file_open = fopen("../hasil.csv", "a");
    $no_rows = count(file("../hasil.csv"));
    if ($no_rows > 1) {
      $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
      'tanggal' => date('Y-m-d H:i'),
      'bangun' => 'Segitiga',
      'sisi'  => NULL,
      'alas' => (int)$alas,
      'tinggi' => (int)$tinggi,
      'jariJari' => NULL,
      'hasil'  => (int)(luasSegitiga($alas, $tinggi))
    );
    fputcsv($file_open, $form_data);
    reset_form();
    echo "
                <script>
                    window.location.href = '../index.php';
                </script>
            ";
  }
}

// Fungsi untuk membersihkan method pos sehingga bisa dipakai lagi 
function reset_form()
{
  $error['alas'] = NULL;
  $error['tinggi'] = NULL;
  $alas = '';
  $tinggi = '';
}

?>
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

  <title>Segitiga</title>
</head>

<body>
  <!-- INI HEADER -->
  <header>
    <div class="m-4">
      <center>
        <h3>Menghitung Luas Bangun Datar </h3>
      </center>
    </div>
  </header>

  <!-- INI BODY -->
  <main class="main mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="">
            <img src="../assets/img/Polygon 1.png" alt="">
          </a>
        </div>
        <div class="col-md-6">
          <div class="card">
            <form class="form-horizontal m-5" method="post">
              <div class="mb-3">
                <label for="alasSegitiga" class="form-label">Alas Segitiga</label>
                <input name="alas" type="int" min="1" class="form-control" id="alasSegitiga" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="tinggiSegitiga" class="form-label">Tinggi Segitiga</label>
                <input name="tinggi" type="number" min="1" class="form-control" id="tinggiSegitiga" aria-describedby="emailHelp">
              </div>
              <center>
                <a href="../index.php" class="btn btn-danger">Kembali</a>
                <input type="submit" name="submit" class="btn btn-info" value="Hitung Sekarang" />
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>