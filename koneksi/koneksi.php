<?php
$server   ="localhost" ;
$username ="admin_stockit";
$password ="Bestari008"; // Apabila tidak ada password ganti "1234" menjadi ""
$database ="admin_stockit";

$con = @mysqli_connect("$server", "$username", "$password", "$database");
//cek koneksi error atau tidak
if (!$con) 
{
		echo "Error: " . mysqli_connect_error();
		exit();
}
?>