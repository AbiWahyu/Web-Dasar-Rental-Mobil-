<?php


 include 'koneksi.php';

 if(isset($_POST['simpan']))
 {
 

 $no_stnk = $_POST['no_stnk'];
 $merk = $_POST['merk'];
 $nama_mobil = $_POST['nama_mobil'];
 $tahun = $_POST['tahun'];
 $kapasitas = $_POST['kapasitas'];



 $sql = "UPDATE tb_mobil SET merk='$merk', nama_mobil='$nama_mobil', tahun='$tahun', kapasitas='$kapasitas' WHERE no_stnk='$no_stnk'";

 $results = $conn->query($sql);

 if($results)
 {
 $_SESSION['alert'] = "Data Mobil Berhasil Diupdate";
 header("location:main_page.php?page=view_mobil");
 } else {
 $_SESSION['alert'] = "Proses Update Gagal";
 header("location:main_page.php?page=update_mobil");
 }

 }

 ?>




 


 