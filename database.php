<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mahasiswa";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_error()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data($tampil)
	{
		$data = mysqli_query($this->koneksi,$tampil);
		$hasil = [];
		while($row = mysqli_fetch_assoc($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($nama,$nim,$prodi,$angkatan)
	{
		mysqli_query($this->koneksi,"insert into mahasiswa values (NULL,'$nama','$nim','$prodi','$angkatan')");
	}

	function hapus($id){
	mysqli_query($this->koneksi,"delete from mahasiswa where id=$id");
	}


	function ubah($data){
		$id = $data["id"];
		$nama = $data["nama"];
		$nim = $data["nim"];
		$prodi = $data["prodi"];
		$angkatan = $data["angkatan"];
		
		mysqli_query($this->koneksi,"update mahasiswa set
					 nama='$nama',nim='$nim',prodi='$prodi',angkatan='$angkatan' where id='$id'");
		return mysqli_affected_rows($this->koneksi);
	}
}
?>