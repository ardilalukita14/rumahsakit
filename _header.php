<?php
require_once "_config/config.php";
if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login')."';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Rumah Sakit Medika</title>
    <link 
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Kaushan+Script&family=Montserrat&family=Pacifico&display=swap" rel="stylesheet"
    />
    <!-- Load file CSS Bootstrap melalui CDN-->
    <link href="<?=base_url('_assets/css2/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
</head>
<body>
    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>

    <!-- navbar -->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
        <span class="text-primary" style="font-family: 'Pacifico', cursive;"><b></div><h4>Rumah Sakit Medika</b></h4></span> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav" style="font-family: 'Montserrat',sans-serif;">
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                <a class="nav-link" href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                    <a class="nav-link" href="<?=base_url('pasien/data.php')?>">Data Pasien</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                    <a class="nav-link" href="<?=base_url('dokter/data.php')?>">Data Dokter</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                    <a class="nav-link" href="<?=base_url('poliklinik/data.php')?>">Data Poliklinik</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                    <a class="nav-link" href="<?=base_url('obat/data.php')?>">Data Obat</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                    <a class="nav-link" href="<?=base_url('rekam_medis/data.php')?>">Rekam Medis</a>
                </li>
                <li class="nav-item"><div style="margin-bottom: 20px"></div>
                <a class="nav-link" href="<?=base_url('auth/logout.php')?>"><span class="text-danger"><b>Logout</b></span> </a>
                </li>
            </ul>
        </div>
    </nav>
<!-- akhir navbar -->
        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container">
