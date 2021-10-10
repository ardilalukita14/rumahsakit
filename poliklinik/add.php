<?php include_once('../_header.php');

?>
	<div class="box">
		<h1>Poliklinik</h1>
		<h4>
			<small>Tambah Data Poliklinik</small>
			<div class="pull-right">
				<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			</div>
		</h4>
		<form action="proses.php" method="post">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Poliklinik</label>
						<input type="text" name="nama" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="gedung">Gedung</label>
						<textarea name="gedung" id="gedung" class="form-control" required></textarea>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="add" value="Simpan" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
		</form>
		
	</div>

	<?php include_once('../_footer.php'); ?>