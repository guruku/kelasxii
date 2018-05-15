<?php

include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama">
		<input type="text" name="judul">
		<textarea name="deskripsi"></textarea>
		<select name="kategori">
			<option value="1">WebDesign</option>
			<option value="2">Design Grafis</option>
			<option value="3">IT Software</option>
			<option value="4">Animasi</option>
		</select>
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) 
{


	$koneksi->query("INSERT INTO lomba(nama,judul,deskripsi,kategori)VALUES('$_POST[nama]','$_POST[judul]','$_POST[deskripsi]','$_POST[kategori]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
}
?>