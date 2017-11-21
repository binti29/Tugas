<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$nomor = $_POST['nomor'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$jurusan = $_POST['jurusan'];
	$indonesia = $_POST['bhs_indonesia'];
	$inggris = $_POST['bhs_inggris'];
	$matematika = $_POST['matematika'];
	$produktif = $_POST['produktif'];
	$jumlah = $_POST['jumlah'];
	$keterangan = $_POST['keterangan'];
	

$sql = "INSERT INTO siswa(nomor_ujian, nama_siswa, id_jenis, id_jurusan, bhs_indonesia, bhs_inggris, matematika, produktif, jumlah, id_keterangan) VALUES ('$nomor','$nama','$jenis','$jurusan','$indonesia','$inggris','$matematika','$produktif','$jumlah','$keterangan')";

$data = mysqli_query($koneksi,$sql);
//var_dump($data);
	if ($data) {
	echo "Data berhasil di simpan";
	} else{
	echo "Data gagal disimpan";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<h2><u>Form Input Data</h2></u>
	<form method="POST">
		<label>No Ujian : </label>
		<input type="number" name="nomor"><br/><br/>
		<label>Nama Siswa : </label>
		<input type="text" name="nama"><br/><br/>
		<label>Jenis Kelamin : </label>
		<select name="jenis">
			<option value="1">Laki-Laki</option>
			<option value="2">Perempuan</option>
		</select><br/><br/>
		<label>Jurusan : </label>
		<select name="jurusan">
			<option value="1">RPL</option>
			<option value="2">TKR</option>
			<option value="3">TO</option>
			<option value="4">TPHP</option>
			<option value="5">TSM</option>
		</select><br/><br/>
		<label>Bahasa Indonesia : </label>
		<input type="number" name="bhs_indonesia"><br/><br/>
		<label>Bahasa Inggris : </label>
		<input type="number" name="bhs_inggris"><br/><br/>
		<label>Matematika : </label>
		<input type="number" name="matematika"><br/><br/>
		<label>Produktif : </label>
		<input type="number" name="produktif"><br/><br/>
		<label>Jumlah : </label>
		<input type="number" name="jumlah"><br/><br/>
		<label>Keterangan :</label>
		<select name="keterangan">
			<option value="1">Lulus</option>
			<option value="2">Tidak Lulus</option>
		</select><br/><br/>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>