<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$nomor = $_POST['nomor'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$jenis = $_POST['jenis'];
	$matematika = $_POST['matematika'];
	$inggris = $_POST['b_inggris'];
	$indonesia = $_POST['b_indonesia'];
	$produktif1 = $_POST['produktif1'];
	$produktif2 = $_POST['produktif2'];
	$produktif3 = $_POST['produktif3'];
	$produktif4 = $_POST['produktif4'];

$sql = "INSERT INTO siswa(no_ujian, nama_siswa, jurusan, id_jk, matematika, b_inggris, b_indonesia, produktif1, produktif2, produktif3, produktif4) VALUES ('$nomor','$nama','$jurusan','$jenis','$matematika','$inggris','$indonesia','$produktif1','$produktif2','$produktif3','$produktif4')";

$data = mysqli_query($koneksi,$sql);
//var_dump($data);
	/*if ($data) {
	echo "Data berhasil di simpan";
	} else{
	echo "Data gagal disimpan";
	}*/

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
		<label>Jurusan : </label>
		<input type="text" name="jurusan"><br/><br/>
		<label>Jenis Kelamin : </label>
		<select name="jenis">
			<option value="1">Laki-Laki</option>
			<option value="2">Perempuan</option>
		</select><br/><br/>
		<label>Matematika : </label>
		<input type="number" name="matematika"><br/><br/>
		<label>Bahasa Indonesia : </label>
		<input type="number" name="b_indonesia"><br/><br/>
		<label>Bahasa Inggris : </label>
		<input type="number" name="b_inggris"><br/><br/>
		<label>Produktif 1 : </label>
		<input type="number" name="produktif1"><br/><br/>
		<label>Produktif 2 : </label>
		<input type="number" name="produktif2"><br/><br/>
		<label>Produktif 3 : </label>
		<input type="number" name="produktif3"><br/><br/>
		<label>Produktif 4 : </label>
		<input type="number" name="produktif4"><br/><br/>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>