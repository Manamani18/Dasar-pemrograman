<?php
include_once "../config/koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM tbl_pendaftaran WHERE id_pendaftaran='$id'");
if($hapus) {
    echo "<script> alert('Data Berhasil Dihapus');
    window.location.href='data_pendaftaran.php'</script>";
}else{
    echo "<script> alert('Data Gagal Dihapus');
    window.location.href='data_pendaftaran.php'</script>";
}