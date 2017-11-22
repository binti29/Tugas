<?php
include 'koneksi.php';
$nomor_ujian = $_GET['nomor_ujian'];

$sql = "DELETE from siswa WHERE nomor_ujian='$nomor_ujian'";

$siswa = mysqli_query($koneksi,$sql);

	if ($siswa) {
		echo "data berhasil di hapus<br>";
	}else{
		echo "data gagal di hapus";
		echo mysqli_error($koneksi);
	}
?>
