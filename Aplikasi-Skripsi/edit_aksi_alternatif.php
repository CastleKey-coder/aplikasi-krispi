<?php

include 'config.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
	$Nama = $_POST['Nama'];
	$Nilai_MM = $_POST['Nilai_MM'];
    $Nilai_IPA = $_POST['Nilai_IPA'];
    $Nilai_IPS = $_POST['Nilai_IPS'];
    $Umur = $_POST['Umur'];


	$update = "UPDATE alternatif SET `Nama`='$Nama',`Nilai_MM`='$Nilai_MM',`Nilai_IPA`='$Nilai_IPA',`Nilai_IPS`='$Nilai_IPS',`Umur`='$Umur' WHERE id='$id'";

	$result = mysqli_query($conn, $update);
	
	if ($result) {
		echo "<script>alert('Update Berhasil');window.location='alternatif.php'</script>";
	}
}

?>