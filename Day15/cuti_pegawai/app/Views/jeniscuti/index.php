<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>

<!-- Main Content -->
<div id="content">

	<!-- Topbar -->
	<?= $this->include('layouts/navbar')?>
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-6" align="left">
				<h1 class="h3 mb-4 text-gray-800">Jenis Cuti</h1>
			</div>
			<div class="col-6" align="right">
				<a href="<?=base_url('cuti/tambah')?>">
					<button type="button" class="btn btn-primary">
						Tambah
					</button>
				</a>
			</div>
		</div>

		<div class="row table-responsive card p-3">
			<table class="table" id="tables">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Cuti</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data as $i => $d) {
					?>
						<tr>
							<td scope="col"><?php echo $i + 1; ?></td>
							
							<td scope="col"><?php echo $d['nama_jenis']; ?></td>
							<td scope="col">

								<!-- WHITOUT SWEETALERT, dont fotget to delete/comments the sweetalert script in the end of body-->
								<a href="<?= base_url('songs/delete/' . $d['id']); ?>">
									<button type="button" class="btn btn-danger">Delete</button>
								</a>

								<!-- whitout modalsss -->
								<a href="<?php echo base_url('songs/edit/' . $d['id']); 
												?>">
									<button type="button" class="btn btn-warning">Edit</button>
								</a>
								<!-- Button trigger modal -->
								<!-- <button type="button" class="btn btn-primary" id="click" data-toggle="modal" data-target="#exampleModal">
									delete
								</button> -->

							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection('content') ?>