
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Song</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container">
        <h1 align="center"> TAMBAH DATA</h1>
        <form method="post" action="<?=base_url('songs/add'); ?>">
            <div class="form-group">
                <label for="songTitle">Judul Lagu</label>
                <input name="title" type="text" class="form-control" id="songTitle" aria-describedby="emailHelp" placeholder="Masukan judul lagu">
            </div>
            <div class="form-group">
                <label for="songDuration">Durasi Lagu</label>
                <input name="duration" type="text" class="form-control" id="songDuration" placeholder="durasi lagu">
            </div>
            <div class="form-group">
                <label for="songSinger">Nama penyanyi</label>
                <input name="singer" type="text" class="form-control" id="songSinger" placeholder="penyanyi lagu">
            </div>
            <div class="form-group">
                <label for="songLabel">Label Musik</label>
                <input name="label" type="text" class="form-control" id="songLabel" placeholder="label lagu">
            </div>
            <div class="form-group">
                <label for="songReleaseDate">Waktu rilis</label>
                <input name="releaseDate" type="date" class="form-control" id="songReleaseDate" placeholder="tanggal rilis">
            </div>
            <div class="form-group">
                <label for="album">Album Lagu</label>
                <input name="album" type="text" class="form-control" id="album" placeholder="album lagu">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
    </div>
</body>
</html>