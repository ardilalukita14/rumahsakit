<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $sql=mysqli_query($con, "INSERT INTO tb_obat (nama_obat, keterangan)
                             VALUES ('$_POST[nama]','$_POST[ket]')");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}
} else if(isset($_POST['edit'])){

    $sql=mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$_POST[nama]', keterangan ='$_POST[ket]'
                            WHERE id_obat= '$_POST[id]'");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}

}



?>