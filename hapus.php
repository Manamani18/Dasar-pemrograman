
<?php
include_once "koneksi.php";

$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa ='$_GET[id]'");

if ($query) {
    echo "<script> alert('Data Berhasil Di Hapus');
    window.location.href='index.php'</script>";
} else {
    echo "<script> alert('Data Gagal Dihapus');
    window.location.href='index.php'</script>";
}    

