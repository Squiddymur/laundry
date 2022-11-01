<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Outlet KING LAUNDRY.</h3>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_outlet=mysqli_query($conn,"select * from outlet");
    $no=0;
    while($data_outlet=mysqli_fetch_array($qry_outlet)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_outlet['nama_outlet']?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 15px;" class="card-text"><?=substr($data_outlet['telp'], 0,20)?></h5>
                <br>
                <td></td><td></td><td></td><td> <a href="ubah_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_outlet=<?=$data_outlet['id_outlet']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
    <style>
        p {text-align: center;}
    </style>
</div>
<br>
<br>
<p><a href="daftar_outlet.php" class="btn btn-primary"><b>Daftar Outlet</b></a></p>
<?php 
    include "footer.php";
?>