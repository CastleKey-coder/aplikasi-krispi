<?php

include 'config.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
	$Nama_Kriteria = $_POST['Nama_Kriteria'];
	$Bobot_Kriteria = $_POST['Bobot_Kriteria'];


	$update = "UPDATE krit_ahp SET `Nama_Kriteria`='$Nama_Kriteria',`Bobot_Kriteria`='$Bobot_Kriteria' WHERE id='$id'";

	$result = mysqli_query($conn, $update);
	
	if ($result) {
		echo "<script>alert('Update Berhasil');window.location='ahp.php'</script>";
	}
}

?>