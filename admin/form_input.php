<?php
include '../include/koneksi.php';


if (isset($_POST['submit'])) {
	$nomor = $_POST['nomor_ujian'];
	$nama = $_POST['nama_siswa'];
	$jenis = $_POST['id_jenis'];
	$jurusan = $_POST['id_jurusan'];
	$indonesia = $_POST['bhs_indonesia'];
	$inggris = $_POST['bhs_inggris'];
	$matematika = $_POST['matematika'];
	$produktif = $_POST['produktif'];
	$jumlah = $_POST['jumlah'];
	$keterangan = $_POST['id_keterangan'];
	
$sql = "INSERT INTO siswa(nomor_ujian, nama_siswa, id_jenis, id_jurusan, bhs_indonesia, bhs_inggris, matematika, produktif, jumlah, id_keterangan) VALUES ('$nomor','$nama','$jenis','$jurusan','$indonesia','$inggris','$matematika','$produktif','$jumlah','$keterangan')";

$data = mysqli_query($koneksi,$sql);

if ($data) {
		echo "<script>alert('data berhasil di tambah');
document.location.href='index.php'</script>\n";
} else {
echo "<script>alert('data gagal di tambah');
document.location.href='index.php'</script>\n";
}

//var_dump($data);
	//if ($data) {
	//echo "Data berhasil di simpan";
	//} else{
	//echo "Data gagal disimpan";
	//echo mysqli_error($koneksi);
	//}
}
?>

<!DOCTYPE html>
<html>
<head>	
	<title>Input Data siswa</title>
	
	<link rel="shortcut icon" href="../images/un.jpeg">
	<link rel="stylesheet" type="text/css" href="../include/css/bootstrap.css">
</head>
 
<body>
	<center><h2>FORM INPUT DATA</h2>
	<a href="index.php" class="btn btn-success">Beranda</a></center>
	<br/><br/>

<div class="container">
<div class="row">
<div class="col-md-6">

<center>
	<div class="container">
	<div class="row">
	<div class="col-md-4">

	<form class="form-horizontal" method="post">
		
		<div class="form-group">
		<label>No Ujian  </label>
		<input type="number" name="nomor_ujian" value="<?php echo $siswa['nomor_ujian'];?>" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Nama Siswa  </label>
		<input type="text" name="nama_siswa" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Jenis Kelamin  </label>
		<select name="id_jenis" class="form-control" required/>
			value="<?php echo $siswa['id_jenis'];?>"
			<option value="1">Perempuan</option>
			<option value="2">Laki-Laki</option>
		</select>
		</div>

		<div class="form-group">
		<label>Jurusan  </label>
		<select name="id_jurusan" class="form-control" required/>
			value="<?php echo $siswa['id_jurusan'];?>"
			<option value="1">RPL</option>
			<option value="2">TKR</option>
			<option value="3">TO</option>
			<option value="4">TPHP</option>
			<option value="5">TSM</option>
		</select>
		</div>
		
		<div class="form-group">
		<label>Bahasa Indonesia  </label>
		<input type="number" name="bhs_indonesia" value="<?php echo $siswa['bhs_indonesia'];?>" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Bahasa Inggris  </label>
		<input type="number" name="bhs_inggris" value="<?php echo $siswa['bhs_inggris'];?>" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Matematika  </label>
		<input type="number" name="matematika" value="<?php echo $siswa['matematika'];?>" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Produktif  </label>
		<input type="number" name="produktif" value="<?php echo $siswa['produktif'];?>" class="form-control" required/>
		</div>

		<div class="form-group">
		<label>Jumlah  </label>
		<input type="number" name="jumlah" value="<?php echo $siswa['jumlah'];?>" class="form-control" required/>
		</div>
		
		<div class="form-group">
		<label>Keterangan  </label>
		<select name="id_keterangan" class="btn tn-submit" class="form-control" required/>
			value="<?php echo $siswa['id_keterangan'];?>"
			<option value="1">Lulus</option>
			<option value="2">Tidak Lulus</option>
		</select></div>
	
		<div class="form-group">
		<input type="submit" name="submit" value="Simpan" class="btn btn-primary" class="form-control" required/>
		</div>
</div>
	</form>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-6">

<aside>
	<h4 style="text-align: left;"><b>PANDUAN PENGINPUTAN DATA :</h4></b>
	
	<h5 style="text-align: left;">
		1. Admin harus menghitung nilai siswa terlebih dahulu di kalkulator di bawah ini.<br/>
		2. Setelah jumlah nilai sudah tampil, admin baru bisa menentukan kelulusan dari siswa berdasarkan jumlah nilai siswa.<br/>
		3. Jumlah nilai yang <b><u>KURANG DARI 200</u></b> maka siswa tersebut dinyatakan <b><u>TIDAK LULUS</u></b>.<br/>
		4. Sedangkan nilai yang jumlahnya <b><u>LEBIH DARI 200</u></b> siswa tersebut dinyatakan <b><u>LULUS</u></b>.<br/>
		5. Untuk siswa yang memiliki <b><u>NIlAI 200</u></b> maka siswa tersebut <b><u>LULUS</u></b>.<br/>
		6. Langkah selanjutnya, admin menginputkan data 	siswa.<br/>
		7. Jika semua sudah di input, klik button SIMPAN.<br/><br/><hr>
	</h5>		

	<?php
	include 'cal.php';
	?>
</aside>
</div>
</div>
</div>
</center>

<footer>
<div class="navbar navbar-inverse ">
<div class="container"><br><br>
<center><p>Copyright &copy; 2017 - Design by <a href="">JUBIL RPL</a></center></p>
</div></div></footer>
</body>
</html>