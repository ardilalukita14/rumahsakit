<?php include_once('../_header.php'); ?>
<?php error_reporting(E_ALL ^ E_NOTICE);?>
	<div class="box">
		<span class="text" style="font-family: 'Fjalla One', cursive; font-size: 30px;"><b>Rekam Medis</b></span> 
		<h4>
			<small>Data Rekam Medis Pasien</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Rekam Medis</a>					
			</div>
		</h4>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="rekammedis">
				<thead>
					<tr>
						<th>No.</th>
						<th>Tanggal Periksa</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Nama Dokter</th>
                        <th>Diagnosa</th>
                        <th>Poliklinik</th>
                        <th>Data Obat</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$query = "SELECT * FROM tb_rekammedis
							 INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
							 INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
							 INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli= tb_poliklinik.id_poli
							 INNER JOIN tb_obat ON tb_rekammedis.id_obat= tb_obat.id_obat";

					$sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_rm)) { ?>
						<tr>
							<td><?=$no++?>.</td>
							<td><?=tgl_indo($data['tgl_periksa'])?></td>
							<td><?=$data['nama_pasien']?></td>
							<td><?=$data['keluhan']?></td>
							<td><?=$data['nama_dokter']?></td>
							<td><?=$data['diagnosa']?></td>
							<td><?=$data['nama_poli']?></td>
							<td><?=$data['nama_obat']?></td>
							<td>
								<a href="del.php?id=<?=$data['id_rm']?>" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?')"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
						<?php
					}
			?>
		</tbody>
	</table>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {

				$('#rekammedis').DataTable({
					columnDefs: [
					{
						"searchable": false,
						"orderable": false,
						"targets": 6
					}
					]
				});
			});
		</script>
	</div>
<?php include_once('../_footer.php'); ?>