<?php
if($_POST){
    $jenis_paket=$_POST['jenis_paket'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    if(empty($jenis_paket)){
        echo "<script>alert('jenis paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis_paket, deskripsi, harga) value ('".$jenis_paket."','".$deskripsi."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tampil_paket.php';</script>";
        }
    }
}
?>