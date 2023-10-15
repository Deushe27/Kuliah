<?php 
require 'function.php';

//ambil data URL

$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM tabelmahasiswa WHERE id = $id")[0];

//cek tombol submit apakah sudah ditekan
if (isset($_POST["submit"]) ) {
	//ambil data dari tiap elemen dalam form
	
	//cek data berhasil diubah atau tidak
	if(ubah($_POST) > 0 ){
		echo "
			<script>
			alert('Data Berhasil Diubah')
			document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Diubah')
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
	<title>Ubah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form class="form"action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
			</li>
			<li>
				<label for="kelas">Kelas : </label>
				<input type="text" name="kelas" id="kelas" required value="<?= $mhs["kelas"];?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
			</li>
		</ul>
		<br>
		<center><button type="submit" name="submit">Ubah Data!</button></center>

	</form>

</body>
</html>