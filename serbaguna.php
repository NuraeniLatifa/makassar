<?php
  include "koneksi.php";
?>
  <div class="row">
  <?php
      $query = "select * from tb_balai where jenis_ = 'Gedung Serbaguna'";
      $hasil = mysqli_query($koneksi,$query);
      while ($data = mysqli_fetch_array($hasil))
      {
        
        ?>
         <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
        <img src="gambar/<?php echo $data['gambar'];  ?>">
        <div class="caption">
          <h3><?php echo $data['nama_balai']; ?></h3>
          <p>Rp.<?php echo $data['hrg']; ?></p>
          <p><a href="#/<?php echo $data['id_balai']; ?>" class="btn btn-primary" role="button">pesan</a> <a href="#/<?php echo $data['id_balai']; ?>" class="btn btn-default" role="button">detail</a></p>
        </div>
    </div>
  </div>
        
        <?php
      }
  ?>
  </div>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.js"></script>