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


		<div class="row table-responsive card p-3">
			<table class="table" id="tables">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Id Pegawai</th>
						<th scope="col">Jenis Cuti</th>
						<th scope="col">Tanggal Pengajuan</th>
						<th scope="col">Tanggal Mulai</th>
						<!-- <th scope="col">Tanggal Approval</th> -->
						<th scope="col">Tanggal Selesai</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Bukti</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data as $i => $d) {
					?>
						<tr>
							<td scope="col"><?php echo $i + 1; ?></td>
							<td scope="col"><?php echo $d['pegawai_id']; ?></td>
							<!-- <td scope="col"><img class="img-fluid w-50" src="<?php //echo $d['foto']; 
																					?>" alt=""></td> -->
							<td scope="col"><?php echo $d['jenis_cuti_id']; ?></td>
							<td scope="col"><?php echo $d['tanggal_pengajuan']; ?></td>
							<td scope="col"><?php echo $d['tanggal_mulai']; ?></td>
							<!-- <td scope="col"><?php //echo $d['tanggal_approval']; 
													?></td> -->
							<td scope="col"><?php echo $d['tanggal_selesai']; ?></td>
							<td scope="col"><?php echo $d['keterangan']; ?></td>
							<td scope="col"><?php echo $d['bukti']; ?></td>
							<td scope="col"><?php echo $d['STATUS']; ?></td>
							<td scope="col">

								<!-- WHITOUT SWEETALERT, dont fotget to delete/comments the sweetalert script in the end of body-->
								<a href="<?= base_url('songs/delete/' . $d['id']); ?>">
									<button type="button" class="btn btn-danger">Delete</button>
								</a>

								<!-- whitout modalsss -->
								<!-- <a href="<?php //echo base_url('songs/edit/' . $d['id']); 
												?>">
									<button type="button" class="btn btn-warning">Edit</button>
								</a> -->
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" id="click" data-toggle="modal" data-target="#exampleModal">
									delete
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>


								<script type="text/javascript">
									// if (<?php !empty($data) ?>) {
									// jQuery(function() {
									// 	jQuery('#delete').click();
									// });
									$(document).ready(function() {
										$('#click').click(function() {
											alert('button clicked');
										});
										// set time out 5 sec
										setTimeout(function() {
											$('#click').trigger('click');
										}, 1000);
									});
									// }
								</script>

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