<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="0;url=index.php">
	<link rel="shortcut icon" href="../images/un.jpeg">
</head>
<body>

<?php
include'../include/koneksi.php';
$id = $_GET['id_siswa'];

$sql = "DELETE from siswa WHERE id_siswa='$id'";

$data = mysqli_query($koneksi,$sql);

if ($data) {
		echo "<script>alert('data berhasil dihapus');
document.location.href='index.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='index.php'</script>\n";
}
?>
</body>
</html>