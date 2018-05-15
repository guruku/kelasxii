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
		<input type="text" name="namalengkap">
		<textarea name="deskripsinya"></textarea>
		<input type="submit" name="simpan">
	</form>
</body>
</html>
<?php 
if (isset($_POST['simpan'])) 
{
	$koneksi->query("INSERT INTO kata(nama,deskripsi) VALUES('$_POST[namalengkap]','$_POST[deskripsinya]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
}
?>