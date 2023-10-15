<?php
require 'function.php';

$mahasiswa = query("SELECT *FROM tabelmahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1;?>
	<?php foreach ($mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i ?></td>
		<td><?php echo $row["nim"];?></td>
		<td><?php echo $row["nama"];?></td>
		<td><?php echo $row["kelas"];?></td>
		<td><?php echo $row["jurusan"];?></td>
		<td>
		<a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
		<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
		</td>
	</tr>
	<?php $i++ ?>
	<?php endforeach;?>
</table>
<br><br>

<a class="tombol-tambah" href="tambah.php">Tambah Data Mahasiswa</a>

<script>
  // Ambil elemen tombol tambah
  const tombolTambah = document.querySelector('.tombol-tambah');

  // Tambahkan efek hover pada tombol tambah
  tombolTambah.addEventListener('mouseover', function() {
    tombolTambah.style.backgroundColor = '#00cc99';
  });

  tombolTambah.addEventListener('mouseout', function() {
    tombolTambah.style.backgroundColor = '#0066cc';
  });
</script>

</body>
</html>
