<?php

include 'config.php';

    $id = $_GET['id'];
    
	$update = "DELETE FROM alternatif WHERE id='$id'";

	$result = mysqli_query($conn, $update);
	
	if ($result) {
		echo "<script>alert('Berhasil Dihapus');window.location='alternatif.php'</script>";
	}

?>