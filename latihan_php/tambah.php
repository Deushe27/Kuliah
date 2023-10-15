<?php 
require 'function.php';
//cek tombol submit apakah sudah ditekan
if (isset($_POST["submit"]) ) {
	//ambil data dari tiap elemen dalam form
	
	//cek data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
			<script>
			alert('Data Berhasil Ditambahkan')
			document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal')
			document.location.href = 'index.php'
			</script>
		";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form class="form-tambah" action="" method="post">
		<ul>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required> 
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="kelas">Kelas : </label>
				<input type="text" name="kelas" id="kelas" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
		</ul>
		<br>
		<center><button type="submit" name="submit">Tambah Data!</button></center>

	</form>

</body>
</html>