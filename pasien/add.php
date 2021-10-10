<?php include_once('../_header.php');

?>
	<div class="box">
		<h1>Pasien</h1>
		<h4>
			<small>Tambah Data Pasien</small>
			<div class="pull-right">
				<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			</div>
		</h4>
		<form action="proses.php" method="post">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="identitas">Nomor Identitas</label>
						<input type="text" name="identitas" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
						<label for="nama">Nama Pasien</label>
						<input type="text" name="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<div>
							<label class="radio-inline">
								<input type="radio" name="jk" id="jk" value="L" required> Laki - laki
							</label>
							<label class="radio-inline">
								<input type="radio" name="jk" id="jk" value="P" required> Perempuan
							</label>
						</div>
					</div>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="telp">Nomor Telepon</label>
						<input type="text" name="no_telp" class="form-control" required autofocus>
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