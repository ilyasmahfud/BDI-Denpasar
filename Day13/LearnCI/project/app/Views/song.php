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

    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <title>Song</title>
</head>

<body>
    <?php
    if (session()->has('success')=="Data Updated Successfully") {
        echo "
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'success',
                title: '".session()->getFlashdata('success')."'
            })
        </script>
        ";
    } 
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
        <div class="row">

            <!-- USING MODALS -->
            <!-- <a href="<?= base_url('songs/add'); ?>">
                <button type="button" class="btn btn-success">Tambah</button>
            </a> -->
    
            <!-- WHITOUT MODALS -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#tambahData">
            Tambah data
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Menambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?=base_url('songs/add');?>">
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
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tak jadi</button>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </center>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <table class="table" id="tables">
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
                            <td scope="col"><?php echo $i + 1; ?></td>
                            <td scope="col"><?php echo $d['title']; ?></td>
                            <td scope="col"><?php echo $d['duration']; ?></td>
                            <td scope="col"><?php echo $d['singer']; ?></td>
                            <td scope="col"><?php echo $d['label']; ?></td>
                            <td scope="col"><?php echo $d['releaseDate']; ?></td>
                            <td scope="col"><?php echo $d['album']; ?></td>
                            <td scope="col">

                                <!-- USING SWEETALERT -->
                                <!-- <a onclick="delete" href=""> -->
                                    <button onclick='validation(<?= $d["id"]; ?>)' type="button" class="btn btn-danger">Delete</button>
                                <!-- </a> -->
                                <script>
                                    const swalWithBootstrapButtons = Swal.mixin({
                                        customClass: {
                                            confirmButton: 'btn btn-success',
                                            cancelButton: 'btn btn-danger'
                                        },
                                        buttonsStyling: false
                                    })

                                    // document.querySelector(".delete").addEventListener('click', function(){
                                    //     Swal.fire("Our First Alert");
                                    // });

                                    function validation(params) {

                                        swalWithBootstrapButtons.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Yes, delete it!',
                                            cancelButtonText: 'No, cancel!',
                                            reverseButtons: true
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // swalWithBootstrapButtons.fire(
                                                //     'Deleted!',
                                                //     'Your file has been deleted.',
                                                //     'success'
                                                // );
                                                window.location.href= "<?= base_url('songs/delete/') ?>/"+params;
                                            } else if (
                                                /* Read more about handling dismissals below */
                                                result.dismiss === Swal.DismissReason.cancel
                                            ) {
                                                swalWithBootstrapButtons.fire(
                                                    'Cancelled',
                                                    'Your imaginary file is safe :)',
                                                    'error'
                                                )
                                            }
                                        })
                                    };
                                </script>
                                    
                                <!-- WHITOUT SWEETALERT, dont fotget to delete/comments the sweetalert script in the end of body-->
                                <!-- <a href="<?= base_url('songs/delete/' . $d['id']); ?>"> -->
                                    <!-- <button  type="button" class="btn btn-danger">Delete</button> -->
                                <!-- </a> -->
                                
                                <!-- whitout modalsss -->
                                <!-- <a href="<?= base_url('songs/edit/' . $d['id']); ?>">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a> -->

                                <!-- using modalss -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit<?= $d['id']?>">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        

                        <!-- Modal -->
                        <div class="modal fade" id="modalEdit<?= $d['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Mengedit lagu <?= $d['title']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?=base_url('songs/update/'.$d['id']); ?>">
                                        <div class="form-group">
                                            <label for="songTitle">Judul Lagu</label>
                                            <input value="<?php echo $d['title']; ?>" name="title" type="text" class="form-control" id="songTitle" aria-describedby="emailHelp" placeholder="Masukan judul lagu">
                                        </div>
                                        <div class="form-group">
                                            <label for="songDuration">Durasi Lagu</label>
                                            <input value="<?php echo $d['duration']; ?>" name="duration" type="text" class="form-control" id="songDuration" placeholder="durasi lagu">
                                        </div>
                                        <div class="form-group">
                                            <label for="songSinger">Nama penyanyi</label>
                                            <input value="<?php echo $d['singer']; ?>" name="singer" type="text" class="form-control" id="songSinger" placeholder="penyanyi lagu">
                                        </div>
                                        <div class="form-group">
                                            <label for="songLabel">Label Musik</label>
                                            <input value="<?php echo $d['label']; ?>" name="label" type="text" class="form-control" id="songLabel" placeholder="label lagu">
                                        </div>
                                        <div class="form-group">
                                            <label for="songReleaseDate">Waktu rilis</label>
                                            <input value="<?php echo $d['releaseDate']; ?>" name="releaseDate" type="date" class="form-control" id="songReleaseDate" placeholder="tanggal rilis">
                                        </div>
                                        <div class="form-group">
                                            <label for="album">Album Lagu</label>
                                            <input value="<?php echo $d['album']; ?>" name="album" type="text" class="form-control" id="album" placeholder="album lagu">
                                        </div>
                                        <center>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tak Jadi</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php
                    } ?>
                </tbody>
            </table>
            <div class="container">
                <div class="row">
                    <center>
                        <img src="<?= base_url('assets/foto-about.jpeg');?>" alt="foto">
                    </center>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        $(document).ready(function() {
            $('#tables').DataTable();
        });
    </script>
</body>

</html>