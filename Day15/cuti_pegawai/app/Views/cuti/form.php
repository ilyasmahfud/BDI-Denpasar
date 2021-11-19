<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <?= $this->include('layouts/navbar') ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Cuti</h1>

        <form action="<?php echo base_url('cuti/tambah/store')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namaCuti">Nama Cuti</label>
                <input type="email" class="form-control" id="namaCuti" aria-describedby="emailHelp" placeholder="">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection('content') ?>