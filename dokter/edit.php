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
                $sql_dokter = mysqli_query($con,"SELECT * FROM tb_dokter WHERE id_dokter= '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_dokter);
            ?>



				<form action="proses.php" method="post">
					<div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="hidden" name="id" value="<?=$data['id_dokter']?>">
						<input type="text" name="nama" id="nama" value="<?=$data['nama_dokter']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="spesialis">Spesialis</label>
						<input type="text" name="spesialis" value="<?=$data['spesialis']?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="telp">Nomor Telepon</label>
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