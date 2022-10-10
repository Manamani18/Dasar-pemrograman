
<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$kelas=$_POST['kelas'];


$query = mysqli_query($koneksi,"INSERT INTO siswa VALUES('','$nama','$alamat','$tlp','$kelas')");

if($query){
    echo "<script>alert('Data Berhasil Disimpan');
    window.location.href='index.php'</script>";
}else {
    echo "<script> alert('Data Gagal Disimpan');
    window.location.href='index.php'</script>";
} 
?>
