<?php include_once('../_header.php');

?>
	<div class="box">
		<h1>Dokter</h1>
		<h4>
			<small>Edit Data Dokter</small>
			<div class="pull-right">
				<a href="data.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			</div>
		</h4>
		<form action="proses.php" method="post">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
            <?php
                $id = @$_GET['id'];
                $sql_pasien = mysqli_query($con,"SELECT * FROM tb_pasien WHERE id_pasien= '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_pasien);
            ?>

				<form action="proses.php" method="post">
					<div class="form-group">
                        <label for="identitas">Nomor Identitas</label>
                        <input type="hidden" name="id" value="<?=$data['id_pasien']?>">
						<input type="text" name="identitas" id="identitas" value="<?=$data['nomor_identitas']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Nama Pasien</label>
						<input type="hidden" name="id" value="<?=$data['id_pasien']?>">
						<input type="text" name="nama" value="<?=$data['nama_pasien']?>" class="form-control" required autofocus>
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
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="hidden" name="id" value="<?=$data['id_pasien']?>">
						<input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="telp">Nomor Telepon</label>
						<input type="hidden" name="id" value="<?=$data['id_pasien']?>">
						<input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="edit" value="Simpan" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
		</form>
		
	</div>

	<?php include_once('../_footer.php'); ?>