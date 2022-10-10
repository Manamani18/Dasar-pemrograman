<?php
	require "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body align="center">
	<br>
	<br>
	<br>
<table border="5px" align="center">
	<tr>
		<th>No</th>
		<th>Nama Siswa</th>
		<th>alamat</th>
		<th>tlp</th>
		<th>kelas</th>
		<th>pilihan</th>
	</tr>
    	<?php
    		$nomor=1;
    		$data = mysqli_query($koneksi,"SELECT * FROM siswa");
			while($d = mysqli_fetch_array($data)){
		?>
	<tr align="center">
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $d ['nama']; ?></td>
		<td><?php echo $d ['alamat']; ?> </td>
		<td><?php echo $d ['tlp']; ?></td>
		<td><?php echo $d ['kelas']; ?></td>
      	<td>
      		<button><a href="form-edit.php?id=<?=$d['id_siswa'] ?>">Update</a></button>
	 		<button><a href="hapus.php?id=<?=$d['id_siswa'] ?>">Delete</a></button>
    	</td>
    </tr>
    <?php } ?>
</table>

<button><a class="tombol" href="form-input.php">TAMBAH DATA BARU</a></button>
</body>
</html>
