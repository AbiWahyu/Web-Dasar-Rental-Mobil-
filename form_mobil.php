    <?php
include 'koneksi.php';
 $no_stnk = "";
 $merk = "";
 $nama_mobil= "";
 $tahun = "";
 $kapasitas = "";
 $readonly = ""; //variable untuk mengaktifkan/tidak inputan npm
 $action = 'simpan_mobil.php';

 if(isset($_GET['no_stnk'])) //Jika ada parameter no_stnk di url
 {
 $no_stnk = $_GET['no_stnk'];

 $sql = "SELECT * FROM tb_mobil WHERE no_stnk='$no_stnk'";
 $results = $conn->query($sql);

 if($results->num_rows > 0)
 {
 while ($row = $results->fetch_assoc())
 {
 $merk = $row['merk'];
 $nama_mobil = $row['nama_mobil'];
 $tahun = $row['tahun'];
 $kapasitas = $row['kapasitas'];
 $readonly = "readonly";
 $action = 'update_mobil.php';

 }
 }
 }

 ?>
    <!--alert-->
    <div class="col-md-10 p-5 pt-2">
    <?php if(isset($_SESSION['alert'])): ?>
      <div class="alert alert-danger alert-dismissible fade show" role ="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;></span>         
        </button>
        <strong><?php echo $_SESSION['alert']; ?></strong>  
      </div>
      <?php 
        unset($_SESSION['alert']);
        endif;
      ?>


<div class="col-md-10 p-5 pt-2">
            <div class="container"> 
<form action="<?php echo $action; ?>" method="post">
  <div class="form-group">
    <label for="no_stnk">No STNK</label>
    <input type="number" min=0 class="form-control" id="no_stnk" name="no_stnk" value="<?php echo $no_stnk; ?>" >
  </div>
   <div class="form-group">
    <label for="merk">Merk</label>
    <select name="merk" class="form-control">
      <option>Toyota</option>
      <option>Honda</option>
      <option>Mitsubishi</option>
      <option>Mercedes Benz</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nama_mobil">Nama Mobil</label>
    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Masukkan Nama Mobil" value="<?php echo $nama_mobil; ?>">
  </div>
  <div class="form-group">
    <label for="tahun">Tahun</label>
    <input type="date" min=0 class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun disini" value="<?php echo $tahun; ?>">
  </div>
  <div class="form-group">
    <label for="kapasitas">Kapasitas</label>
    <input type="number" min=0 class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas Tempat Duduk" value="<?php echo $kapasitas; ?>">
  </div>
  <button type="submit" name="simpan" class="btn btn-dark">Simpan</button>
</form>
</div>
</div>

