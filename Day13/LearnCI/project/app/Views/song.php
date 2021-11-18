<?= $this->extend('layouts/head'); ?>

<?= $this->section('content'); ?>

<body>
    <?php
    $validation = \config\Services::validation();
    helper('form');
    if (session()->has('success')) {
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
                title: '" . session()->getFlashdata('success') . "'
            })
        </script>
        ";
    }
    ?>
    <?= $this->include('layouts/navbar'); ?>

    <div class="container">
        <div class="row">

            <!-- WITHOUT MODALS -->
            <a href="<?= base_url('songs/add'); ?>">
                <button type="button" class="btn btn-success">Tambah</button>
            </a>

            <!-- USING MODALS -->
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#tambahData">
                Tambah data
            </button> -->

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
                            <!-- <div>
                                <?php //form_open('songs/store'); 
                                ?>
                            </div> -->
                            <form method="post" action="<?= base_url('songs/store'); ?>">
                                <div class="form-group mb-4 mt-md-0">
                                    <div class="custom-file" align="center">
                                        <label for="foto">Foto</label>
                                        <input name="foto" type="file" class="btn btn-primary" id="foto">
                                        <!-- <label class="custom-file-label" for="customFile">Choose image</label> -->
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="songTitle">Judul Lagu</label>
                                        <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Masukan judul lagu">
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
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tak jadi</button>
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </div>
                            </form>
                            <!-- <div>
                                <?php // form_close() 
                                ?>
                            </div> -->
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
                                                window.location.href = "<?= base_url('songs/delete/') ?>/" + params;
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
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit<?= $d['id'] ?>">
                                    Edit
                                </button>
                            </td>
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="modalEdit<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Mengedit lagu <?= $d['title'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('songs/update/' . $d['id']); ?>">
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
                        <img src="<?= base_url('assets/foto-about.jpeg'); ?>" alt="foto">
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

<?= $this->endSection(); ?>