<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemilihan Calon Peserta OSN</title>
        <link rel="stylesheet" href="assets/css/main-style.css">
        <link href="assets/images/logo.png" rel="shortcut icon"/>
    </head>
    <body>
        <div class="main">
            <div class="wrapper">
                <div class="content">
                    <div class="box-container">
                        <div class="box-wrapper">
                            <div class="box-wrapper-again">
                                <div class="box-main">
                                    <div class="sidebar">
                                        <div class="top"><img src="assets/images/logo.png" width="30" align="center">
                                            Perhitungan WP dan AHP Calon Peserta OSN
                                        </div>  
                                        <ul>
                                            <li>
                                                <a href="index.php" class="active" href="#">
                                                    <i class="fa-dashboard"></i>Dashboard</a>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wp.php" class="#" href="#">
                                                    <i class="fa-krit-WP"></i>Data Kriteria WP
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ahp.php" class="#" href="#">
                                                    <i class="fa-krit-AHP"></i>Data Kriteria AHP
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="alternatif.php"class="#" href="#">
                                                    <i class="fa-alternatif"></i>Data Alternatif
                                                </a>
                                            </li>
                                            <li>
                                                <a href="hasil.php"class="#" href="#">
                                                    <i class="fa-hasil"></i>Hasil Seleksi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tools.php" class="#" href="#">
                                                    <i class="fa-tools"></i>Tools
                                                </a>
                                            </li>
                                            <li>
                                                <a href="logout.php" class="#" href="">
                                                    <i class="fa-logout"></i>Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashmenu">
                                        <div class="welcome">
                                            <h1>Selamat Datang,</h1>
                                            <h2>Di Aplikasi Pemilihan Calon Peserta Olimpiade Menggunakan Metode WP dan AHP</h2><br>
                                            <h3>Sistem pendukung keputusan (SPK) pemilihan calon peserta OSN merupakan suatu sistem yang 
                                                mampu meningkatkan efektivitas dan efisiensi manajemen, meningkatkan kecepatan dan 
                                                mempermudah dalam pengolahan data nilai setiao calon peserta OSN.</h5>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>