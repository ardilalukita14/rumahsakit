<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $sql=mysqli_query($con, "INSERT INTO tb_rekammedis (id_pasien, keluhan, id_dokter, diagnosa, id_poli, tgl_periksa, id_obat)
                             VALUES ('$_POST[pasien]','$_POST[keluhan]', '$_POST[dokter]','$_POST[diagnosa]', '$_POST[poli]', '$_POST[tgl]', '$_POST[obat]')");
    }
    
	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}


?>