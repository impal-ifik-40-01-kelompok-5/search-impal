<?php
 $koneksi = mysqli_connect("localhost","root","","jasa_titip");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
header('location:Untitled-4.html');
?>