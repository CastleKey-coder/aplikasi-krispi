<?php

include 'config.php';

    $id = $_GET['id'];
    
	$update = "DELETE FROM krit_ahp WHERE id='$id'";

	$result = mysqli_query($conn, $update);
	
	if ($result) {
		echo "<script>alert('Berhasil Dihapus');window.location='ahp.php'</script>";
	}

?>