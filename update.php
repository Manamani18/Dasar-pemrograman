<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$id = $_POST ['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$kelas = $_POST['kelas'];

//update data ke database 

mysqli_query($koneksi,"UPDATE siswa SET nama='$nama', alamat='$alamat', tlp='$tlp', kelas='$kelas' where id_siswa='$id'");

//kembali ke index.php

header ("location:index.php");

?>