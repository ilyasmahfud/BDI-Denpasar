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
    <title>Data Provinsi</title>
    <link rel="stylesheet" href="image-area.css">
    <script src="image-area.js"></script>
</head>
<body>
    <div class="container mt-5 card">
        <h1 class="mt-3">Register Provinsi</h1>
        <hr>
        <form method="post" action="provinsi.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nama">Nama Provinsi</label>
                <input class="form-control" type="text" id="Nama" name="nama_provinsi" placeholder="">
            </div>
            <div class="form-group">
                <label for="ibu_kota">Ibu Kota</label>
                <input class="form-control" type="text" id="ibu_kota" name="ibu_kota" placeholder="">
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input class="form-control" type="text" id="website" name="website" placeholder="">
            </div>
            <div class="form-group">
                <label for="gubernur">Gubernur</label>
                <input class="form-control" type="text" id="gubernur" name="gubernur" placeholder="">
            </div>
            <div class="form-group">
                <label for="wakil_gubernur">Wakil Gubernur</label>
                <input class="form-control" type="text" id="wakil_gubernur" name="wakil_gubernur" placeholder="">
            </div>
            <center class="mb-3">                
                <button type="submit" class="btn btn-primary">Submit</button>            
            </center>
        </form>
    </div>
</body>
</html>
