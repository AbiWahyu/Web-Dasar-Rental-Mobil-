 <?php
 session_start();

 include 'koneksi.php';

 if(isset($_GET['no_stnk']))
 {
 $no_stnk= $_GET['no_stnk'];

 $sql = "DELETE FROM tb_mobil WHERE no_stnk='$no_stnk'";

 $results = $conn->query($sql);

 if($results)
 {
 $_SESSION['alert'] = "Data Mobil Berhasil Dihapus";
 header("location:main_page.php?page=view_mobil");
 } else {
 $_SESSION['alert'] = "Proses hapus Gagal";
 header("location:main_page.php?page=view_mobil");
 }

 }

 ?>