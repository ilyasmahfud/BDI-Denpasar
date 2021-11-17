
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
        <div class="row">
            <a href="<?=base_url('songs/add'); ?>">
                <button type="button" class="btn btn-success">Tambah</button>
            </a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Singer</th>
                  <th scope="col">Label</th>
                  <th scope="col">ReleaseDate</th>
                  <th scope="col">Album</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

              <?php
                foreach ($data as $i => $d) {
                ?>
                    <tr>
                      <td scope="col"><?php echo $i+1; ?></td>
                      <td scope="col"><?php echo $d['title']; ?></td>
                      <td scope="col"><?php echo $d['duration']; ?></td>
                      <td scope="col"><?php echo $d['singer']; ?></td>
                      <td scope="col"><?php echo $d['label']; ?></td>
                      <td scope="col"><?php echo $d['releaseDate']; ?></td>
                      <td scope="col"><?php echo $d['album']; ?></td>
                      <td scope="col">
                        <a href="">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                      </td>
                    </tr>
                    <?php
                }?>
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>