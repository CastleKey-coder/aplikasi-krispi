<?php

include 'config.php';

if (isset($_POST['simpan'])) {
	$Nama_Kriteria = $_POST['Nama_Kriteria'];
	$Bobot_Kriteria = $_POST['Bobot_Kriteria'];


	$simpan = "INSERT INTO krit_wp VALUES ('','$Nama_Kriteria','$Bobot_Kriteria')";

	$result = mysqli_query($conn, $simpan);
	
	if ($result) {
		echo "<script>alert('Penginputan Berhasil');window.location='wp.php'</script>";
	}
}

?>