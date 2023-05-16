<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "perhitungan";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    echo "gagal tersambung";
}
 
?>