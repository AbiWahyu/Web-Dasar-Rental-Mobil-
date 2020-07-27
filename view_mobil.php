<?php

include 'koneksi.php'; 
$sql = "SELECT * FROM tb_mobil";
$result = $conn->query($sql);
?>
 <div class="col-md-10 p-5 pt-2">
            <div class="container">   
              <center><h2>Halaman View Mobil</h2></center>
            </div>
            <h3> <i class="fas fa-car mr-2"></i>View Mobil</h3><hr>
             <div class="row">
              <div class="col-sm-12 p-2 text-right">
                <a href="?page=form_mobil" class="btn btn-info"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
              </div>
            </div>

             <!--alert-->
          <div class="card">

          <?php if(isset($_SESSION['alert'])): ?>
            <div class="alert alert-warning alert-dismissible fade show" role ="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;></span>         
              </button>
              <strong><?php echo $_SESSION['alert']; ?></strong>  
            </div>
            <?php 
              unset($_SESSION['alert']);
              endif;
            ?>
            
            <div class="card">
            <div class="card-body">
              <table class="table text-center table-hover table-responsive-md" id="table">
                <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">No_stnk</th>
                <th scope="col"> Merk</th>
                <th scope="col"> Nama_Mobil</th>
                <th scope="col"> Tahun</th>
                <th scope="col"> Kapasitas</th>
                <th scope="col"> Pilihan</th>
            </tr>
        
        <tbody>
          <?php 
            $No=1;
            if ($result->num_rows>0) {
              while ($row=$result->fetch_assoc()) {
                # code...
             
           ?>
            <tr>
                <th scope="row"><?php echo $No++; ?></th>
                <td><?php echo $row['no_stnk']; ?></td>
                <td><?php echo $row['merk']; ?></td>
                <td><?php echo $row['nama_mobil']; ?></td>
                <td><?php echo $row['tahun']; ?></td>
                <td><?php echo $row['kapasitas']; ?></td>

                <td>
                <a href="?page=form_mobil&no_stnk=<?php echo $row['no_stnk'];?>"  class="btn btn-small btn-warning">
                  <i class="fas fa-edit"></i> Edit</a>
                  <a href="hapus.php?no_stnk=<?php echo $row['no_stnk'];?>" onclick="confirm('Lu Yakin Bro ?')" class="btn btn-small btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
            </tr> 
            <?php 
          }
        }else{
             ?>  
             <tr>
               <td colspan="6">Data Kosong</td>
             </tr> 
             <?php 
             }
              ?>
        </tbody>
         </thead>
    </table>
  </div>
</div>



