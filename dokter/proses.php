<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $sql=mysqli_query($con, "insert into tb_dokter (nama_dokter, spesialis, alamat, no_telp)
                             values ('$_POST[nama]','$_POST[spesialis]', '$_POST[alamat]','$_POST[no_telp]')");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}
} else if(isset($_POST['edit'])){

    $sql=mysqli_query($con, "update tb_dokter set nama_dokter = '$_POST[nama]', spesialis ='$_POST[spesialis]'
                            , alamat = '$_POST[alamat]', no_telp= '$_POST[no_telp]'
							where id_dokter= '$_POST[id]'");

	if($sql){
		header('Location: data.php');
	} else{
		echo "data gagal disimpan";
	}

}



?>