<?php 
	session_start();
	

	include 'koneksi.php';

	if(isset($_POST['simpan'])) 
	{ 
		$no_stnk = $_POST['no_stnk'];
		$merk = $_POST['merk'];
		$nama_mobil = $_POST['nama_mobil'];
		$tahun = $_POST['tahun'];
		$kapasitas = $_POST['kapasitas'];
		$sql = "INSERT INTO tb_mobil (no_stnk, merk, nama_mobil, tahun, kapasitas) VALUES ('$no_stnk', '$merk', '$nama_mobil', '$tahun', '$kapasitas')";
		$result = $conn->query($sql);

		if($result)
		{
		$_SESSION['alert'] = "Data Mobil Berhasil Disimpan";
		header("location:main_page.php?page=view_mobil");
		} else {
		 $_SESSION['alert'] = "Proses Gagal";
		 header("location:main_page.php?page=form_mobil");
		 }

	}
 ?>