<?php
  include 'tes.php';
 
// menangkap data yang di kirim dari form
$id_pel = $_POST['id_pel'];
$nama_pel = $_POST['nama_pel'];
$email_pel = $_POST['email_pel'];
$username_pel = $_POST['username_pel'];
$pass_pel = $_POST['pass_pel'];
$alamat_pel = $_POST['alamat_pel'];
$telp_pel = $_POST['telp_pel'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('$id_pel','$nama_pel','$email_pel','$username_pel','$pass_pel','$alamat_pel','$telp_pel')");
 
// mengalihkan halaman kembali ke index.php
header("Untitled-4.html");
?> 