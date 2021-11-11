<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Data Provinsi</title>
    <link rel="stylesheet" href="image-area.css">
    <script src="image-area.js"></script>
</head>
<body>
    <div class="container mt-5 card">
        <h1 class="mt-3">Edit data mahasiswa</h1>
        <hr>

        <?php
            require_once('config.php'); 
            $parameter = $_GET['nim'];
            $query = "SELECT * FROM mahasiswa WHERE NIM =". $parameter;

            if ($query = mysqli_query($koneksi, $query)) {
                $row = $query-> fetch_assoc();
            } else {
                echo "ERROR: mysqli error $query";
            }
        ?>

        <form method="post" action="proses/update.php?nim='<?php echo $parameter ?>'" enctype="multipart/form-data">
            <div class="form-group">
                <label for="NIM">NIM</label>
                <input class="form-control" type="text" id="NIM" name="NIM" value="<?php echo $row['NIM']?>">
            </div>
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input class="form-control" type="text" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo $row['nama_mahasiswa']?>">
            </div>
            <div class="form-group">
                <label for="date">Tanggal Lahir</label>
                <input class="form-control" type="date" id="datePicker" name="tgl_lahir" value="<?php echo $row['tgl_lahir']?>">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" value="<?php echo $row['username']?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" id="email" name="email" value="<?php echo $row['email']?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" value="<?php echo $row['password']?>">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01" name="id_univ">Universitas</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_univ">
                    <option selected>Choose</option>
                    <option 
                        <?php
                            if ($row['id_univ'] == '11M') {
                                echo 'selected';
                            }
                        ?> 
                    value="11M" name="id_univ">Universitas Sebelas Maret</option>
                    <option 
                        <?php
                            if ($row['id_univ'] == 'UMS') {
                                echo 'selected';
                            }
                        ?>
                    value="UMS" name="id_univ">Universitas Muhammadiyah Surakarta</option>
                </select>
            </div>
            <center class="mb-3">                
                <button type="submit" class="btn btn-primary">Submit</button>            
            </center>
        </form>
    </div>
</body>
</html>
