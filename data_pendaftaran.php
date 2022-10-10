<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap alignitems-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Pendaftaran</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<?php if(isset($_GET['pesan'])) : ?>
    <div class="alert alert-success" role="alert">
    <?php echo $_GET['pesan']; ?>
</div>
<?php endif; ?>

<a href="frm_tambah_pendaftar.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
<br> <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Tmp Lahir</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Tlp/Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_array($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nama_lengkap']; ?></td>
                    <td><?= $rs['tmpt_lahir']; ?></td>
                    <td><?= $rs['tgl_lahir']; ?></td>
                    <td><?= $rs['alamat_rumah']; ?></td>
                    <td><?= $rs['nama_ibu']; ?></td>
                    <td><?= $rs['no_tlp']; ?></td>
                    <td>
                    <a class="btn btn-sm btn-primary" href="form_ubah_data.php?id=<?= $rs['id_pendaftaran']; ?>">Ubah</a> 
                    <a class="btn btn-sm btn-primary" href="hapus_pendaftaran.php?id=<?= $rs['id_pendaftaran']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            endwhile;
            ?>
        </tbody>
    </table>
</div>
</main>
<?php
include "../layout/footer.php";
?>