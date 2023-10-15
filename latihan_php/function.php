<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "Bengak1123", "dbmahasiswa");

//ambil data dari object result
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	$nim = $data["nim"];
	$nama = $data["nama"];
	$kelas = $data["kelas"];
	$jurusan = $data["jurusan"];

	//query insert data
	$query = "INSERT INTO tabelmahasiswa
				VALUES
			('','$nim', '$nama', '$kelas', '$jurusan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tabelmahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}



function ubah($data){
	global $conn;
	$id = $data["id"];
	$nim = $data["nim"];
	$nama = $data["nama"];
	$kelas = $data["kelas"];
	$jurusan = $data["jurusan"];

	//query insert data
	$query = "UPDATE tabelmahasiswa SET
				nim = '$nim',
				nama = '$nama',
				kelas = '$kelas',
				jurusan = '$jurusan'
			WHERE id = $id
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


















?>