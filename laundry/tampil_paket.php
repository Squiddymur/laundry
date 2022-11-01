<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Daftar Paket KING LAUNDRY.</h3>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    $no=0;
    while($data_paket=mysqli_fetch_array($qry_paket)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_paket['jenis_paket']?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_paket['deskripsi']?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 15px;" class="card-text">Rp.<?=substr($data_paket['harga'], 0,20)?></h5>
                <br>
                <td></td><td></td><td></td><td> <a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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
<p><a href="tambah_paket.php" class="btn btn-primary"><b>Tambah Paket</b></a></p>
<?php 
    include "footer.php";
?>