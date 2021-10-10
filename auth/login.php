<?php
 require_once "../_config/config.php";
 if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url()."';</script>";
 } else{
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - RS Medika</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/_assets/icon rs.jpg">
    <link rel="stylesheet" href="../_assets/css/style.css" />
    <link
		href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" 
		rel="stylesheet"
	/>

</head>

<body>

    <div id="wrapper" class ="card">
        <div class="container">
                <center>

                <!-- fungsi login -->

                <?php
                    if(isset($_POST['login'])){
                        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                        $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                        $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' and password = '$pass'") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_login)>0) {
                           $_SESSION['user'] = $user;
                           echo "<script>window.location='".base_url()."';</script>";
                        }else{?>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="alert alert-danger alert-dismissable" role= "alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <span class= "glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <strong>login gagal!</strong> username/password salah
                                    </div>
                                </div>
                                                
                            </div>
                            <?php
                                                
                            }
                            }

                            ?>
                <!-- akhir fungsi login -->

                <form action="" method="post" class="navbar-form">
                    <div class="row" style="margin-bottom:20px">
                        <h4>LOGIN RS MEDIKA</h4>
                    </div>
                    <div class="gb" style="margin-bottom:20px">
                        <img src="../_assets/icon rs.jpg">
                    </div>
                    
                    <div class="row m-1" style="margin-bottom:10px">
                        <div class="input-group m-1">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="row m-2" style="margin-bottom:20px">
                    <div class="input-group m-2">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required autofocus>
                    </div>
                    <div class="row m-2" style="margin-top:10px">
                    <div class="input-group m-2">
                        <input type="submit" name="login" class="btn btn-primary" value="login">
                    </div>
                    </div>
                    </div>
                    
                </form>
            </center>
        </div>
    </div>
<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
<script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>

</html>
<?php
 }
 ?>