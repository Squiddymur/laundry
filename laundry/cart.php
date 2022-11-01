<?php 
    include "header.php";
?>

<h2>PROSES LAUNDRY</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>ID</th><th>Nama Paket</th><th>Harga</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket): ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['jenis']?></td>
                <td><?=$val_paket['qty']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php 
    include "footer.php";
?>