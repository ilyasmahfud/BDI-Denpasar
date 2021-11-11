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
        <h1 class="mt-3">Tambah data mahasiswa</h1>
        <hr>
        <form method="post" action="proses/save.php" enctype="multipart/form-data">
            <!-- <div class="form-group">
                <label for="id">ID</label>
                <input class="form-control" type="text" id="id" name="id" placeholder="">
            </div> -->
            <div class="form-group">
                <label for="NIM">NIM</label>
                <input class="form-control" type="text" id="NIM" name="NIM" placeholder="">
            </div>
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input class="form-control" type="text" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="">
            </div>
            <div class="form-group">
                <label for="date">Tanggal Lahir</label>
                <input class="form-control" type="date" id="datePicker" name="tgl_lahir" placeholder="">
            </div>
            
            <!-- Bootstrap -->
            <!-- <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
            <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
            <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css' media="screen" /> -->
            <!-- Bootstrap -->
            <!-- Bootstrap DatePicker -->
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script> -->
            <!-- Bootstrap DatePicker -->
            <!-- <script type="text/javascript">
                $(function () {
                    $('#txtDate').datepicker({
                        format: "yyyy/mm/dd"
                    });
                });
                </script>
                <label for="">Tanggal Lahir</label>
            <div class="input-group mb-1">
                <input id="txtDate" type="text" name="tgl_lahir" class="form-control date-input" readonly="readonly" />
                <label class="input-group-btn" for="txtDate" name="tgl_lahir">
                    <span class="btn btn-default">
                        <span class="fas fa-calender-week"></span>
                    </span>
                </label>
            </div> -->

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="text" id="password" name="password" placeholder="">
            </div>
            <!-- <div class="form-group">
                <label for="id_univ">id_univ</label>
                <input class="form-control" type="text" id="id_univ" name="id_univ" placeholder="">
            </div> -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01" name="id_univ">Universitas</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_univ">
                    <option selected>Choose...</option>
                    <option value="11M" name="id_univ">Universitas Sebelas Maret</option>
                    <option value="UMS" name="id_univ">UNiversitas Muhammadiyah Surakarta</option>
                </select>
            </div>
            <center class="mb-3">                
                <button type="submit" class="btn btn-primary">Submit</button>            
            </center>
        </form>
    </div>
</body>
</html>
