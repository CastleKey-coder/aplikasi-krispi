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
                    <div id="particles" class="particles">
                    </div>
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
                                                <a href="ahp.php" class="active" href="#">
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
                                                <a href="logout.php" class="#" href="#">
                                                    <i class="fa-logout"></i>Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashmenu">
                                    <div class="welcome-table">
                                            <h1>Kriteria AHP</h1><br>
                                            <button><a href="input_ahp.php" class="btn btn-add">Tambah</a></button>
                                            <table>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kriteria</th>
                                                    <th>Bobot Kriteria</th>
                                                    <th>Edit</th>
                                                    <th>Hapus</th>
                                                </tr>
                                                <?php 
		                                            // koneksi database
		                                            $koneksi = mysqli_connect("localhost","root","","perhitungan");
 
	                                                // menampilkan data pegawai
		                                            $data = mysqli_query($koneksi,"select * from krit_ahp");
		                                            $no = 1;
		                                            while($row = mysqli_fetch_array($data)){
		                                        ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row['Nama_Kriteria']; ?></td>
                                                    <td><?php echo $row['Bobot_Kriteria']; ?></td>
                                                    <td><a class="btn btn-edit" href="edit_ahp.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                                    <td><a class="btn btn-hapus" href="hapus_ahp.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
                                                </tr>
                                                <?php 
                                                    }
                                                ?>
                                            </table>
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