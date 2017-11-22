<?php
include 'koneksi.php';
$nomor_ujian = $_GET['nomor_ujian'];

$sql = "DELETE from siswa WHERE nomor_ujian='$nomor_ujian'";

$siswa = mysqli_query($koneksi,$sql);

	if ($siswa) {
		echo "barang berhasil di hapus<br>";
	}else{
		echo "barang gagal di hapus";
		echo mysqli_error($koneksi);
	}
?>