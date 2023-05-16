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
                                                <a href="index.php" class="#" href="#">
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
                                                <a  href="alternatif.php"class="active" href="#">
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
                                                <a href="logout.php" class="#" href="#">
                                                    <i class="fa-logout"></i>Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashmenu">
                                        <div class="welcome-table">
                                            <h1>Kriteria AHP</h1><br>
                                                <?php 
                                                    include "config.php";
                                                    $id = $_GET['id'];
                                                    $query_mysql = $conn->query("SELECT * FROM alternatif WHERE id='$id'")or die(mysql_error());
                                                    $nomor = 1;
                                                    while($row = mysqli_fetch_array($query_mysql)){
                                                ?>
                                                <form action="edit_aksi_alternatif.php" method="post">		
                                                    <table>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>
                                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                                <input type="text" name="Nama" value="<?php echo $row['Nama'] ?>">
                                                            </td>					
                                                        </tr>	
                                                        <tr>
                                                            <td>Nilai_MM</td>
                                                            <td><input type="text" name="Nilai_MM" value="<?php echo $row['Nilai_MM'] ?>"></td>					
                                                        </tr>
                                                        <tr>
                                                            <td>Nilai_IPA</td>
                                                            <td><input type="text" name="Nilai_IPA" value="<?php echo $row['Nilai_IPA'] ?>"></td>					
                                                        </tr>
                                                        <tr>
                                                            <td>Nilai_IPS</td>
                                                            <td><input type="text" name="Nilai_IPS" value="<?php echo $row['Nilai_IPS'] ?>"></td>					
                                                        </tr>
                                                        <tr>
                                                            <td>Umur</td>
                                                            <td><input type="text" name="Umur" value="<?php echo $row['Umur'] ?>"></td>					
                                                        </tr>
                                                            <td></td>
                                                            <td><input type="submit" value="Simpan" name="simpan" class="btn btn-simpan"></td>					
                                                        </tr>				
                                                    </table>
                                                </form>
                                                <?php 
                                                    }
                                                ?>
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