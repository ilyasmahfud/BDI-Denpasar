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
    <?php
    $validation = \config\Services::validation();
    helper('form');
    ?>
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
        <?php
        if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h3>Perisak form</h3>
                <hr>
                <?php echo session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        endif
        ?>
        <h1 align="center"> TAMBAH DATA</h1>
        <!-- <form method="post" action="<?= base_url('songs/store'); ?>"> -->
        <?= form_open('songs/store'); ?>
        <div class="form-group">
            <label for="songTitle">Judul Lagu</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Masukan judul lagu">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('title')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('title'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="songDuration">Durasi Lagu</label>
            <input name="duration" type="text" class="form-control" id="duration" placeholder="durasi lagu">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('duration')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('duration'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="songSinger">Nama penyanyi</label>
            <input name="singer" type="text" class="form-control" id="singer" placeholder="penyanyi lagu">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('singer')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('singer'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="songLabel">Label Musik</label>
            <input name="label" type="text" class="form-control" id="label" placeholder="label lagu">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('label')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('label'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="songReleaseDate">Waktu rilis</label>
            <input name="releaseDate" type="date" class="form-control" id="songReleaseDate" placeholder="tanggal rilis">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('releaseDate')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('releaseDate'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="album">Album Lagu</label>
            <input name="album" type="text" class="form-control" id="album" placeholder="album lagu">
            <!-- VALIDATOR -->
            <?php if ($validation->getError('album')) { ?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('album'); ?>
                </div>
            <?php } ?>
        </div>
        <center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </center>
        <?= form_close() ?>
        <!-- </form> -->
    </div>
</body>

</html>