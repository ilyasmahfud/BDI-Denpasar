<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JS Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <?php
    require_once('config.php');
    ?>

    <div class="container">
        <h1>Ayoo Belajar CRUD Native PHP</h1>

        <?php
            $cek = count($_GET);
            if ($cek > 0) {
                $status = $_GET['status'];
                # code...
                if ($status == 'NIM_sudah_ada') {
                    echo "
                    <div class='alert alert-warning' role='alert'>
                        NIM sudah ada, coba masukkan id yang lain!
                    </div>
                    ";
                } elseif ($status == 'success') {
                    echo "
                    <div class='alert alert-primary' role='alert'>
                        Data Berhasil ditambahkan!
                    </div>
                    ";
                } elseif($status == 'error') {
                    echo "
                    <div class='alert alert-danger' role='alert'>
                        Data gagal ditambahkan!
                    </div>
                    ";
                } elseif ($status == 'updateSuccess') {
                    echo "
                    <div class='alert alert-primary' role='alert'>
                        Data Berhasil diUpdate!
                    </div>
                    ";
                } elseif($status == 'updateError') {
                    echo "
                    <div class='alert alert-danger' role='alert'>
                        Data gagal diUpdate!
                    </div>
                    ";
                } elseif ($status == 'updateSuccess') {
                    echo "
                    <div class='alert alert-primary' role='alert'>
                        Data Berhasil diHapus!
                    </div>
                    ";
                } elseif($status == 'updateError') {
                    echo "
                    <div class='alert alert-danger' role='alert'>
                        Data gagal diHapus!
                    </div>
                    ";
                } 
            }
        ?>

        <div class="text-right">
            <a href="create.php" class="btn btn-md btn-primary">tambah Data</a>
        </div>
        <hr>
        <table class="table table-border table-striped" style="width: 100%">
            <tr>
                <!-- <th>id</th> -->
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
                <!-- <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>univ</th> -->
            </tr>
            <?php
                $query = "SELECT NIM, nama_mahasiswa, tgl_lahir FROM mahasiswa";

                if ($query = mysqli_query($koneksi, $query)) {
                    // <td>".$data['id']."</td>
                    // <td>".$data['username']."</td>
                    // <td>".$data['email']."</td>
                    // <td>".$data['password']."</td>
                    // <td>".$data['id_univ']."</td>
                    while ($data = mysqli_fetch_array($query)) {
                        echo "
                        <tr>
                            <td>".$data['NIM']."</td>
                            <td>".$data['nama_mahasiswa']."</td>
                            <td>".$data['tgl_lahir']."</td>
                            <td>
                                <a href='edit.php?nim=".$data['NIM']."' class='btn btn-warning'>Edit</a>
                                <a href='#' onclick='validasi(".$data['NIM'].")' class='btn btn-danger'>Delete</a>
                            </td>
                            
                        </tr>
                        ";
                    }
                } else {
                    echo "
                    <tr>
                        <td colspan=8>Data tidak ditemukan</td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasi(param) {
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            Swal.fire({
            title: 'Yakin?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                var delayInMilliseconds = 3000; //1 second
                setTimeout(function() {
                    //your code to be executed after 1 second
                    window.location.href = "proses/delete.php?nim="+param;
                }, delayInMilliseconds);
            } else {
                swalWithBootstrapButtons.fire(
                'Yah kok ga jadi',
                'untung kamu labil',
                'error'
                )
            }
            })
        }
    </script>
</body>

<!-- sweet alert -->
</html>