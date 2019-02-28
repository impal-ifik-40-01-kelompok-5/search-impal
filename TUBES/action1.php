<?php
  include 'tes.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$lama_waktu = $_POST['lama_waktu'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into barang_titip values('','$nama_barang','$jenis_barang','$lama_waktu')");
 
// mengalihkan halaman kembali ke index.php
header("Untitled-4.html");
?> 