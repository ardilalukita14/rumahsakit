<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $sql=mysqli_query($con, "insert into tb_poliklinik (nama_poli, gedung)
                             values ('$_POST[nama]','$_POST[gedung]')");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}
} else if(isset($_POST['edit'])){

	$sql=mysqli_query($con, "update tb_poliklinik set nama_poli = '$_POST[nama]', gedung ='$_POST[gedung]'
							where id_poli= '$_POST[id]'");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}

}



?>