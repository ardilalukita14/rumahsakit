<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $sql=mysqli_query($con, "INSERT INTO tb_pasien (nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp)
                             VALUES ('$_POST[identitas]','$_POST[nama]','$_POST[jk]', '$_POST[alamat]','$_POST[no_telp]')");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}
} else if(isset($_POST['edit'])){

    $sql=mysqli_query($con, "UPDATE tb_pasien SET nomor_identitas = '$_POST[identitas]', nama_pasien = '$_POST[nama]', 
    				  jenis_kelamin ='$_POST[jk]', alamat = '$_POST[alamat]', no_telp= '$_POST[no_telp]' WHERE id_pasien= '$_POST[id]'");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}

}



?>