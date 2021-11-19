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
		<h1 class="h3 mb-4 text-gray-800">Level</h1>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection('content') ?>