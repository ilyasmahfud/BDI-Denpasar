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
    // helper('form');
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
        <form enctype="multipart/form-data" method="post" action="<?= base_url('songs/store'); ?>">
            <?php //echo form_open('songs/store'); 
            ?>
            <div class="form-group mb-3">
                <center>
                    <div class="col-sm-4">
                        <img src="/img/profil-default.png" alt="" class="img-thumbnail img-preview">
                    </div>
                </center>
                <div class="custom-file">
                    <input name="foto" type="file" class="custom-file-input <?php echo ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" id="foto" onChange="previewImg()">
                    <div class="invalid-feedback mt-2">
                        <?php echo $validation->getError('foto'); ?>
                    </div>
                    <label class="custom-file-label" for="foto">Pilih gambar</label>
                </div>
            </div>
            <div class="form-group">
                <label for="songTitle">Judul Lagu</label>
                <input name="title" value="<?= old('title'); ?>" type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="title" aria-describedby="emailHelp" placeholder="Masukan judul lagu">
                <!-- VALIDATOR -->
                <?php //if ($validation->getError('title')) { 
                ?>
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('title'); ?>
                </div>
                <?php //} 
                ?>
            </div>
            <div class="form-group">
                <label for="songDuration">Durasi Lagu</label>
                <input name="duration" value="<?= old('duration'); ?>" type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="duration" placeholder="durasi lagu">
                <!-- VALIDATOR -->
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('duration'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="songSinger">Nama penyanyi</label>
                <input name="singer" value="<?= old('singer'); ?>" type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="singer" placeholder="penyanyi lagu">
                <!-- VALIDATOR -->
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('singer'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="songLabel">Label Musik</label>
                <input name="label" value="<?= old('label'); ?>" type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="label" placeholder="label lagu">
                <!-- VALIDATOR -->
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('label'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="songReleaseDate">Waktu rilis</label>
                <input name="releaseDate" value="<?= old('releaseDate'); ?>" type="date" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="songReleaseDate" placeholder="tanggal rilis">
                <!-- VALIDATOR -->
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('releaseDate'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="album">Album Lagu</label>
                <input name="album" value="<?= old('album'); ?>" type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="album" placeholder="album lagu">
                <!-- VALIDATOR -->
                <div class="invalid-feedback mt-2">
                    <?= $validation->getError('album'); ?>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
            <?php //echo form_close() 
            ?>
        </form>
    </div>
    <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            fotoLabel.textContent = foto.files[0].name;

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>