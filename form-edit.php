<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>

<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM siswa where id_siswa='$id'");
	while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
	<table align="center">
</br>
<h3 align="center"> Edit data</h3>
		<tr>
			<td>Nama Siswa</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id_siswa'];?>">
				<input type="text" name="nama" value ="<?php echo $d['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>"></td>
		</tr>
		<tr>
			<td>tlp</td>
			<td><input type="text" name="tlp" value="<?php echo $d['tlp'];?>"></td>
		</tr>
		<tr>
			<td>kelas</td>
			<td><input type="text" name="kelas" value="<?php echo $d['kelas'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php } ?>

</body>
</html>