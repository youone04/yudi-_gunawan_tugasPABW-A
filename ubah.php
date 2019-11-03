<?php 
include('database.php');
$koneksi = new database();

$id=$_GET["id"];
$d = $koneksi->tampil_data("SELECT * FROM mahasiswa WHERE id=$id")[0];
if(isset($_POST["submit"])){
	if($koneksi->ubah($_POST)>0){
		header('location:proses.php?action=ubah');
	}else{
		header('location:proses.php?action=ubah');
	}
}
?>

<form action="" method="post">

<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" value="<?php echo $d['nim'] ?>"></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td><input type="text" name="prodi" value="<?php echo $d['prodi'] ?>"></td>
	</tr>

	<tr>
		<td>Angkatan</td>
		<td><input type="text" name="angkatan" value="<?php echo $d['angkatan'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan" name="submit"></td>
	</tr>
</table>

</form>