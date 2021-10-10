<?php include_once('../_header.php');

?>
	<div class="box">
		<h1>Poliklinik</h1>
		<h4>
			<small>Edit Data Poliklinik</small>
			<div class="pull-right">
				<a href="data.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			</div>
		</h4>
		<form action="proses.php" method="post">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
            <?php
                $id = @$_GET['id'];
                $sql_obat = mysqli_query($con,"SELECT * FROM tb_poliklinik WHERE id_poli= '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_obat);
            ?>



				<form action="proses.php" method="post">
					<div class="form-group">
                        <label for="nama">Nama Poliklinik</label>
                        <input type="hidden" name="id" value="<?=$data['id_poli']?>">
						<input type="text" name="nama" id="nama" value="<?=$data['nama_poli']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="gedung">Gedung</label>
						<textarea name="gedung" id="gedung" class="form-control" required><?=$data['gedung']?></textarea>
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