<?php 
include('database.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add"){
	$koneksi->tambah_data($_POST['nama'],$_POST['nim'],$_POST['prodi'],$_POST['angkatan']);
	header('location:tampil.php');

}else if($action == "hapus"){
	$koneksi->hapus($_GET['id']);
	header('location:tampil.php');
}
else if($action == "ubah"){
	$koneksi->ubah($_POST['id'],$_POST['nama'],$_POST['nim'],$_POST['prodi'],$_POST['angkatan']);
 	header("location:tampil.php");;
}

?>