<?php

include 'config.php';

if (isset($_POST['simpan'])) {
	$Nama = $_POST['Nama'];
	$Nilai_MM = $_POST['Nilai_MM'];
    $Nilai_IPA = $_POST['Nilai_IPA'];
    $Nilai_IPS = $_POST['Nilai_IPS'];
    $Umur = $_POST['Umur'];


	$simpan = "INSERT INTO alternatif VALUES ('','$Nama','$Nilai_MM','$Nilai_IPA','$Nilai_IPS','$Umur')";

	$result = mysqli_query($conn, $simpan);
	
	if ($result) {
		echo "<script>alert('Penginputan Berhasil');window.location='alternatif.php'</script>";
	}
}

?>