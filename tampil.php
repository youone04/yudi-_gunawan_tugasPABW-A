<?php 	
include('database.php');
$koneksi = new database();
$data_barang = $koneksi->tampil_data("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Prodi</th>
			<th>Angkatan</th>
			<th>Aksi</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['prodi']; ?></td>
				<td><?php echo $row['angkatan']; ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $row['id']; ?>&action=ubah">Update</a>
					<a href="proses.php?id=<?php echo $row['id']; ?>&action=hapus">Delete</a> 
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>