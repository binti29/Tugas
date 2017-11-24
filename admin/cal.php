<aside>
	<link rel="shortcut icon" href="../images/un.jpeg">
	<h4><b>KALKULATOR</h4></b><br/>
	<form method="POST">
		<table>
		<tr>
		<td><label>BHS INDONESIA : </label></td>
		<td><input type="text" name="num1"><br/></td>
		</tr>
		<tr>
		<td><label>BHS INGGRIS : </label></td>
		<td><input type="text" name="num2"><br/></td>
		</tr>
		<tr>
		<td><label>MATEMATIKA : </label></td>
		<td><input type="text" name="num3"><br/></td>
		</tr>
		<tr>
		<td><label>PRODUKTIF : </label></td>
		<td><input type="text" name="num4"><br/></td>
		</tr>
		</table>
		<select name="operator">
			<option value="tambah">Tambah</option>
			<option value="kurang">Kurang</option>
			<option value="bagi">Bagi</option>
			<option value="kali">Kali</option>
		</select>
		<input type="submit" name="kirim" value="Hitung"><br/>
	</form>

	<?php
if (isset($_POST['kirim'])){
	$angka1 = $_POST['num1'];
	$angka2 = $_POST['num2'];
	$angka3 = $_POST['num3'];
	$angka4 = $_POST['num4'];

	$operator = $_POST['operator'];
	if ($operator == "tambah") {
		echo $hasil = $angka1 + $angka2 + $angka3 + $angka4;
	} else if ($operator == "kurang") {
		echo $hasil = $angka1 - $angka2 - $angka1 - $angka2;
	} elseif ($operator == "bagi") {
		echo $hasil = $angka1 / $angka2 / $angka1 / $angka2;
	} elseif ($operator == "kali") {
		echo $hasil = $angka1 * $angka2 * $angka1 * $angka2;
	}
}
?>

</aside>